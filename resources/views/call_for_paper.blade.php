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
                        <h2>Call For Papers</h2>
                        <a href="{{asset('papers/test.pdf')}}" class="button" download>Download PDF</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <h4 class="panel-title">
                                <a>
                                    Integrated Solutions for Sustainability and Development in Science and Technology, Engineering Education.
                                </a>
                            </h4>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a>
                                    Contributed papers should be in the form of oral presentation.
                                </a>
                            </h4>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                               <a>
                                   Participants wishing to presents papers are invited to submit the full papers of no more then five pages each.
                               </a>
                            </h4>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a>
                                    The paper size of a full paper (A4) should be 210 mm (8.7") wide and 297 mm (11.69") Long.
                                </a>
                            </h4>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a>
                                    The entire document should be in Time New Roman Font.
                                </a>
                            </h4>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a>
                                    The margins must be set as follows
                                    Top = 0.5", Bottom = 0.5", Left = 0.7" , Right = 0.7".
                                </a>
                            </h4>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a>
                                    Your paper must be in two column format with a space of 0.2" between columns.
                                </a>
                            </h4>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a>
                                    The full paper should be submitted in both MS word (.doc,docx) and Acrobat (.pdf) file attachment.
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
