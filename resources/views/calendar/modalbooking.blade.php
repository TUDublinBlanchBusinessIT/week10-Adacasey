<div id="fullCalModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Booking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="bookingForm" action="{{route('bookings.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="memid" class="form-label">Member ID</label>
                        <input type="text" class="form-control" id="memid" name="memberid"/>
                    </div>
                    <div class="mb-3">
                        <label for="bookingDate" class="form-label">Booking Date</label>
                        <input type="text" class="form-control" id="bookingDate" name="bookingdate"/>
                    </div>
                    <div class="mb-3">
                        <label for="starttime" class="form-label">Start Time</label>
                        <input type="text" class="form-control" id="starttime" name="starttime"/>
                    </div>
                    <div class="mb-3">
                        <label for="endtime" class="form-label">End Time</label>
                        <input type="text" class="form-control" id="endtime" name="endtime"/>
                    </div>
                    <div class="mb-3">
                        <label for="courtid" class="form-label">Court ID</label>
                        <input type="text" class="form-control" id="courtid" name="courtid"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="submitButton" class="btn btn-primary">Create Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>