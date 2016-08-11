@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form method="post" action="{{route('addpage')}}">
                            <div class="form-group">
                            <label for="tile"> Название страницы</label>
                                <div class="inpute-group">
                            <input type="text" name="title">
                                </div>
                            </div>
                            <textarea name="textarea" id="" cols="30" rows="10"></textarea>
                            <br>
                            <div class="form-group">
                                <input type="submit" value="Отправить" class="btn default">
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                        <p id="p"></p>
                        @if(count($re))
                            @foreach($re as $re)
                                {{$re}}
                            @endforeach
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('script')
    <script>
        var form = document.forms[0];
        form.addEventListener('submit',function(e){
            clearChild();
            e.preventDefault();
            var p = document.getElementById('p');
            var title = form.title.value;
            var textarea = form.textarea.value;
            var taken = form._token.value;
            var req = new XMLHttpRequest();


            var data = new FormData(data);

            req.open('post','/admin/addajax');

            req.setRequestHeader("X-CSRF-TOKEN", form._token.value);


            req.onreadystatechange = function(){
                if ( req.readyState !== 4 && req.status !== 200)
                    console.log('Статус: '+req.statusText + '\n Реди статус: ' + req.readyState);

                    var text = JSON.parse(req.responseText).name;
                    p.appendChild(document.createTextNode(text));
                    console.log( text);


            }

            req.send(data);


        });


        function clearChild(){
            var p = document.getElementById('p');
            if(p.hasChildNodes){
                var last;
                while( last = p.lastChild){
                    p.removeChild(last);
                }
            }
        }


    </script>

@endsection
