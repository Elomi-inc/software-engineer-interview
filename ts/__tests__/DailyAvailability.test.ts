import { DailyAvailability } from '../src/DailyAvailability';

describe('DailyAvailability', () => {

    /**
     * Our restaurant partners supply a time range that they can accept reservations. We need to display all the
     * available seating options within this time range for members to select. Depending on the preferences of the
     * restaurant, these seating options could be at different intervals (every fifteen minutes,
     * every thirty minutes, etc.).
     */
    test('it provides availability on an interval', () => {
        // Given an instance of DailyAvailability with a start and end time
        const scheduleBlock = new DailyAvailability(720, 795);

        // When we fetch the options using a 15-minute interval
        const fifteenMinuteOptions = scheduleBlock.getOptions(15);

        // Then we should be returned a list of available seating options every fifteen minutes
        expect(fifteenMinuteOptions).toEqual([720, 735, 750, 765, 780, 795]);

        // And when we fetch the options using a 25-minute interval
        const twentyFiveMinuteOptions = scheduleBlock.getOptions(25);

        // Then we should be returned a list of available seating options every twenty-five minutes
        expect(twentyFiveMinuteOptions).toEqual([720, 745, 770, 795]);
    });

    /**
     * Our restaurant partners define a time range that reservations can be booked. We want to make sure that
     * the options we display to our members is only with the set range, even if the interval does not fall
     * exactly at the end time.
     */
    test('it does not include the end time if it does not fall on interval', () => {
        const scheduleBlock = new DailyAvailability(720, 800);

        // Test for 30-minute interval
        const thirtyMinuteOptions = scheduleBlock.getOptions(30);
        expect(thirtyMinuteOptions).toEqual([720, 750, 780]);
    });

    /**
     * Our restaurant partners require that they have the ability to block off certain dates and times. We need to
     * implement an exclude method to optionally include a block of times that should not be available.
     */
    test('it does not include times that are excluded', () => {
        const scheduleBlock = new DailyAvailability(720, 800);
        scheduleBlock.exclude(750, 770);

        const thirtyMinuteOptions = scheduleBlock.getOptions(30);
        expect(thirtyMinuteOptions).toEqual([720, 780]);
    });

    /**
     * What else could we test for? Any room for improvement?
     */
    // Additional tests can be implemented here
    // test('it_...', () => { ... });
    // test('it_also_...', () => { ... });
});
