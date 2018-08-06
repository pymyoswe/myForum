@extends('layouts.master')

@section('title')
    Call For Paper
@stop

@section('content')

    <section class="gray-bg section-padding" id="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Proposal Sessions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                    <form>
                        <div class="form-group">
                            <label for="type">Theme</label>
                            <select name="type" id="type" class="form-control">
                                <option selected disabled>Select Proposal Session</option>
                                <option>Renewable Energy</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="author" id="author" placeholder="Author">
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <button type="submit" class="button">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Paper Title
                                </th>
                                <th>
                                    Author
                                </th>
                                <th>
                                    Abstract
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Teasadlk asdflkkjasdf lkasdfasdfklj
                                </td>
                                <td>
                                    Yan Win Soe
                                </td>
                                <td>
                                    <a href="{{route('proposal-download',['filename'=>'test.pdf'])}}">
                                        <span class="glyphicon glyphicon-save-file text-primary" style="font-size: 24px"></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


@stop
