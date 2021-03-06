@extends('layouts.layout')
@section('content')
<div class="container">
    <p class="text-center font-weight-bold display-5">
        <div class="container text-center">
            <p class="alert-success text-center">
                <?php
                $exception = Session::get('exception');
                if($exception){
                echo $exception;
                Session::put('exception',null);
                }
                ?>
            </p>
            <form method="POST" action="{{URL::to('admin/participants')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row pt-2">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Your Name</label>
                    <div class="col-md-4">
                        <input id="name" type="text" class="form-control" name="name" placeholder="write your full name" required>
                    </div>
                </div>
                <div class="form-group row pt-2">
                    <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                    <div class="col-md-4">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="write your e-mail address" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row pt-2">
                    <label for="contact" class="col-md-4 col-form-label text-md-right">Contact Number</label>
                    <div class="col-md-4">
                        <input id="contact" type="text" class="form-control" name="contact" placeholder="write your contact number" required>
                    </div>
                </div><hr>
                <div class="mb-3 justify-content-center pl-5 pb-5">
                    <caption>Answer the below question..</caption>
                    <table class="text-left pl-5 pr-2 text-left ml-5" style="width:80%;">
                        @foreach($all_data as $i=>$row)
                        @if($i<3)
                        <tr>
                            <td colspan="4">
                                {{++$i}}. {{ $row->question }}
                            </td>
                        </tr>
                        <?php
                        $a = $row->option;
                        $a = explode(',', $a);
                        ?>
                        <tr>
                            <td class="pl-5">
                                <input type="radio" id="answer" name="answer[{{$i}}]" value="{{ $a[0] }}">
                                <label for="answer1a">{{ $a[0] }}</label>
                            </td>
                            <td class="pl-5">
                                <input type="radio" id="answer" name="answer[{{$i}}]" value="{{ $a[1] }}">
                                <label for="answer1a">{{ $a[1] }}</label>
                            </td>
                            <td class="pl-5">
                                <input type="radio" id="answer" name="answer[{{$i}}]" value="{{ $a[2] }}">
                                <label for="answer1a">{{ $a[2] }}</label>
                            </td>
                            <td class="pl-5">
                                <input type="radio" id="answer" name="answer[{{$i}}]" value="{{ $a[3] }}">
                                <label for="answer1a">{{ $a[3] }}</label>
                            </td>
                            
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-4 offset-md-4">
                        <input type="submit" name="submit" class="btn btn-primary input-lg" value="SUBMIT YOUR ANSWER">
                    </div>
                </div>
            </form>
        </div>
    </p>
</div>
@endsection