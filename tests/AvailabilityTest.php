<?php

namespace Tests;

use DateTime;
use Interview\Availability;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class AvailabilityTest extends PHPUnitTestCase
{
    /**
     * @test
     */
    public function it_provides_availability_on_an_interval()
    {
        // Given we have an instance of Availability with a start and end time
        $scheduleBlock = new Availability(start: '2024-01-04 12:00:00', end: '2024-01-04 13:15:00');

        // When we fetch the options using a 15-minute interval
        $days = $scheduleBlock->options(intervalMinutes: 15);

        // Then we should be returned a list of available seating options
        $this->assertSame([
            '2024-01-04 12:00:00',
            '2024-01-04 12:15:00',
            '2024-01-04 12:30:00',
            '2024-01-04 12:45:00',
            '2024-01-04 13:00:00',
            '2024-01-04 13:15:00',
        ], $days);
    }

    /**
     * @test
     */
    public function it_does_not_include_the_end_time_if_it_does_not_fall_on_interval()
    {
        // Given we have an instance of Availability with an end time that will not fall on the interval requested
        $scheduleBlock = new Availability(start: '2024-01-04 12:00:00', end: '2024-01-04 13:15:00');

        // When we fetch the options using a 30-minute interval
        $days = $scheduleBlock->options(intervalMinutes: 30);

        // Then we should not expect to see the end time present
        $this->assertSame([
            '2024-01-04 12:00:00',
            '2024-01-04 12:30:00',
            '2024-01-04 13:00:00',
        ], $days);
    }
    
    /**
     * Our restaurant partners require that they have the ability to block off certain dates and times. We should
     * implement an exclude method to optionally include a block of times that should not be available.
     *
     * Please complete the test and functionality for the exclude() method using Test-Driven Development.
     *
     * @test
     */
    public function it_does_not_include_times_that_are_excluded()
    {
        // Given we have an instance of Availability with an excluded range

        // When we fetch options using a 15-minute interval

        // Then we should not see the times in the excluded range
    }
}