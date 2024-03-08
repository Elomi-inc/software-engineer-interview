export class DailyAvailability {
    private excludedStartTime: number | null;
    private excludedEndTime: number | null;

    constructor(public startTime: number, public endTime: number) {
        this.excludedStartTime = null;
        this.excludedEndTime = null;
    }

    getOptions(intervalInMinutes: number): number[] {
        return []
    }

    exclude(startTime: number, endTime: number): DailyAvailability {
        this.excludedStartTime = startTime;
        this.excludedEndTime = endTime;

        return this;
    }
}
