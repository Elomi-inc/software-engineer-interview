<?php

namespace Tests;

use Interview\DailyAvailability;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class DailyAvailabilityTest extends PHPUnitTestCase
{
    /**
     * Our restaurant partners supply a time range that they can accept reservations. We need to display all the
     * available seating options within this time range for members to select. Depending on the preferences of the
     * restaurant, these seating options could be at different intervals (every fifteen minutes,
     * every thirty minutes, etc.).
     *
     * @test
     */
    public function it_provides_availability_on_an_interval()
    {
        // Given an instance of DailyAvailability with a start and end time
        $scheduleBlock = new DailyAvailability(startTime: 43200, endTime: 43275);

        // When we fetch the options using a 15-minute interval
        $fifteenMinuteOptions = $scheduleBlock->getOptions(intervalInMinutes: 15);

        // Then we should be returned a list of available seating options every fifteen minutes
        $this->assertSame([
            43200,
            43215,
            43230,
            43245,
            43260,
            43275,
        ], $fifteenMinuteOptions);

        // And when we fetch the options using a 25-minute interval
        $twentyFixMinuteOptions = $scheduleBlock->getOptions(intervalInMinutes: 25);

        // Then we should be returned a list of available seating options every twenty-five minutes
        $this->assertSame([
            43200,
            43225,
            43250,
            43275,
        ], $twentyFixMinuteOptions);
    }

    /**
     * Our restaurant partners define a time range that reservations can be booked. We want to make sure that
     * the options we display to our members is only with the set range, even if the interval does not fall
     * exactly at the end time.
     *
     * @test
     */
    public function it_does_not_include_the_end_time_if_it_does_not_fall_on_interval()
    {
        // Given an instance of DailyAvailability with an end time that will not fall within the interval requested
        $scheduleBlock = new DailyAvailability(startTime: 43200, endTime: 43275);

        // When we fetch the options using a 30-minute interval
        $thirtyMinuteOptions = $scheduleBlock->getOptions(intervalInMinutes: 30);

        // Then we should not expect to see the end time present in the list of options, because it does not fall
        // on the thirty-minute interval
        $this->assertSame([
            43200,
            43230,
            43260,
        ], $thirtyMinuteOptions);
    }
    
    /**
     * Our restaurant partners require that they have the ability to block off certain dates and times. We need to
     * implement an exclude method to optionally include a block of times that should not be available.
     *
     * @test
     */
    public function it_does_not_include_times_that_are_excluded()
    {
        // Given an instance of Availability with an excluded range
        $scheduleBlock = new DailyAvailability(startTime: 43200, endTime: 43275);

        // When exclude a period of time and fetch options using a 15-minute interval
        $options = $scheduleBlock
            ->exclude(startTime: 43220, endTime: 43250)
            ->getOptions(intervalInMinutes: 15);

        // Then we should see the options without those that fall in the excluded range
        $this->assertSame([
            43200,
            43215,
            43260,
            43275,
        ], $options);
    }

    /**
     * What else could we test for? Any room for improvement?
     *
     * @test
     */
    public function it_()
    {

    }

    /**
     * Feel free to add more tests
     *
     * @test
     */
    public function it_also_()
    {

    }
}