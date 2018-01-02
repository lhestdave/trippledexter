@extends('layouts.app')

@section('content')
<div class="container">
    Home
    <div class="row">
        <div class="col-md-8 well">

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Pending Request</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <strong>25</strong>
                    <br>
                    Annex
                    <br>
                    Main
                    <br>
                    Bajada
                </div>               
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">For Approval</div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>User</strong>!
                </div>
                
         </div>
        </div>


        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Your Rating</div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>User</strong>!
                </div>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">For Request</div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>User</strong>!
                </div>
                
            </div>
        </div>


        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>UIC Lab Updates</strong></div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>User</strong>!
                </div>
                
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Statistics</strong></div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>User</strong>!
                </div>
                
            </div>
        </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default well">
                <div class="panel-heading">Announcements</div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>User</strong>!
                </div>
                
            </div>
        </div>

    </div>
</div>
@endsection
