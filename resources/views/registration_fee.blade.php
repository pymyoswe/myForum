@extends('layouts.master')


@section('title')
    Registration Fees
    @stop

@section('content')


    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Registration Fees</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 text-center">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Category</th>
                                <th colspan="2" style="text-align: center">Fees</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>
                                        Foreign Student
                                    </th>
                                    <th>
                                        USD 100 (Early Bird)
                                    </th>
                                    <th>
                                        USD 150 (On-Site)
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Foreign Staff
                                    </th>
                                    <th>
                                        USD 150 (Early Bird)
                                    </th>
                                    <th>
                                        USD 200 (On-Site)
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Local Participants
                                    </th>
                                    <th colspan="2">
                                        50,000 Kyats
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Local Observers
                                    </th>
                                    <th colspan="2">
                                        30,000 Kyats
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Student Participants
                                    </th>
                                    <th colspan="2">
                                        Free of Charge
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @stop