@extends('layouts.app')

@section('content')
	<h1>Contact</h1>
	                <div class="panel-heading">Contact</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ 'contact/submit' }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('datenow') ? ' has-error' : '' }}">
                            <label for="datenow" class="col-md-4 control-label">Date</label>

                            <div class="col-md-6">
                                <input id="datenow" type="date" class="form-control" name="datenow" value="{{ old('datenow') }}" required autofocus>

                                @if ($errors->has('datenow'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('datenow') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                        	<label for="message" class="col-md-4 control-label">Message</label>

                            <div class="col-md-6">
                                <textarea id="message" class="form-control" name="message" value="" required>
                                </textarea>
                            </div>
                        </div>
                        	
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save/Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endsection