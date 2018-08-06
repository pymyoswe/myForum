@extends('layouts.master')

@section('title')
    Important Date
@stop

@section('content')

    <section class="price-area overlay section-padding" id="registration-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Important Date</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="price-table">
                        <h3 class="text-uppercase price-title">Deadline for Abstracts</h3>
                        <hr>
                        <label class="button">August 15th</label>
                        <hr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="price-table active">
                        <span class="price-info"><span class="ti-crown"></span></span>
                        <h3 class="text-uppercase price-title">Full Paper Submission Deadline</h3>
                        <hr>
                        <label class="button">September 7th</label>
                        <hr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="price-table">
                        <h3 class="text-uppercase price-title">Notification of Full Paper Acceptance</h3>
                        <hr>
                        <label class="button">October 12th</label>
                        <p>From Reviewers</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
