@extends('app.app')

@section('content')

    @include('app.partials.menuCategorias')

    <div class="container span9 text-center col-md-6 col-md-offset-3">
        <h1><strong>O que voce precisa que seja feito?</strong></h1>

        <h2><strong>Encontre o seu Servico</strong></h2>
        <br/><br/>

        {!! Form::open(array('route' => 'busca.servicos.tags', 'method' =>'get' ,'class' => 'form-horizontal ajax', 'id' => 'busca')) !!}
        <div class="input-group">
            {!! Form::input('text', "tag", null, ['class' => 'form-control', 'id' => 'tag', 'placeholder' => "O que voce procura?"]) !!}
            <span class="input-group-btn">
                {!! Form::submit('Encontre Servicos',['class' => 'btn btn-default', 'id' => 'btnBuscar']) !!}
            </span>
        </div>
        {!! Form::close() !!}
        <br/><br/><br/>
    </div>

    <div class="container span9 text-center col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-body">

                <div class="row-fluid">
                    <h3><strong>SERVICOS DESTACADOS</strong></h3>

                    <p>Escolha entre nossos servicos mais populares</p>
                    <br/><br/>

                    @if(isset($instances['servicos']) && !empty($instances['servicos']))
                        <div class="row">
                            @foreach($instances['servicos'] as $i => $servico)
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-left">

                                    <div class="container-fluid">
                                        <div class="panel panel-default">

                                            @if(isset($servico->Imagens[0]))
                                                <a href="{{ route('busca.servico', $servico->id) }}"><img
                                                            src="{{ $servico->Imagens[0]->nome }}"
                                                            class="img-responsive" width="640" height="480"></a>
                                            @else
                                                <a href="{{ route('busca.servico', $servico->id) }}"><img
                                                            src="http://lorempixel.com/640/480/?{{$i}}"
                                                            class="img-responsive" width="640" height="480"></a>
                                            @endif
                                            <div class="panel-body">
                                                @if(!empty($servico->descricao))
                                                    <p>
                                                        <small>
                                                            {{substr($servico->descricao, 0, 80) . "..."}}
                                                        </small>
                                                    </p>
                                                @else
                                                    <p>
                                                        <small>Descricao</small>
                                                    </p>
                                                @endif
                                            </div>

                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                        @if(!empty($servico->titulo))
                                                            <p><strong>{{$servico->titulo}}</strong></p>
                                                        @else
                                                            <p><strong>Servico</strong></p>
                                                        @endif
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                        @if(!empty($servico->valor))
                                                            <p class="pull-right"><i
                                                                        class="glyphicon glyphicon-usd">{{$servico->valor}}</i>
                                                            </p>
                                                        @else
                                                            <p class="pull-right"><i
                                                                        class="glyphicon glyphicon-usd">0</i>
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <br/><br/>

                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="container-fluid">
                                <p>Nenhum servico encontrado...</p>
                            </div>
                        </div>
                        <br/><br/>
                    @endif
                    {!! $instances['servicos']->render() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-title">
                            <h3><strong>VENDA SEU SERVICO</strong></h3>

                            <p>O que voce faz de melhor? Crie seu servico e comece a vender.</p>
                            <br/><br/>
                        </div>
                        <div class="panel-footer">
                            <object width="100%" height="100%" class="img-thumbnail">
                                <param name="movie" value="http://www.youtube.com/v/XDxvYKcJtVU?rel=0"/>
                                <embed src="http://www.youtube.com/v/XDxvYKcJtVU?rel=0&loop=1&audio=0&showinfo=0&autohide=1&autoplay=1"
                                       type="application/x-shockwave-flash"
                                       width="100%" height="666" class="img-fluid"/>
                            </object>
                        </div>
                    </div>

                    <br/>
                    <hr class="featurette-divider">
                    <br/>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-title">
                            <h3><strong>SOLICITE UM SERVICO</strong></h3>

                            <p>Pessoas que amam o que fazem ajudaram voce a ter tudo feito.</p>
                            <br/><br/>
                        </div>
                        <div class="panel-footer">
                            <object width="100%" height="100%" class="img-thumbnail">
                                <param name="movie" value="http://www.youtube.com/v/S9FQ_ozPMAU?rel=0"/>
                                <embed src="http://www.youtube.com/v/S9FQ_ozPMAU?rel=0?rel=0&audio=0&autoplay=1&loop=1&showinfo=0&autohide=1"
                                       type="application/x-shockwave-flash"
                                       width="100%" height="666" class="img-fluid"/>
                            </object>
                        </div>
                    </div>

                    <br/>
                    <hr class="featurette-divider">
                    <br/>
                </div>

            </div>

        </div>
    </div>
    </div>

    <div class="container span9 text-center col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-body">
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
        </div>
    </div>

@endsection