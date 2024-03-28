<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Applicant Information Status</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Applicant Name</th>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            {{--  @foreach ($applications as $application)  --}}
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>Jhon Doe</td>
                                    <td>INV-0123</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td>
                                    <a onclick="return confirm('Do you want to edit this job??')" class="btn btn-success" href="">Accept</a>
                                    <a onclick="return confirm('Are you sure to DELETE this JOB?')" class="btn btn-danger" href="">Reject</a>

                                    </td>
                                </tr>
                                {{--  @endforeach  --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
