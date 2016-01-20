@extends('layouts.default')

@section('content')
<h2><i class="fa fa-cog"></i> <strong>Configuration</strong> du site</h2>
<div class="widget">
    <div class="widget-content padding">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-info full">

                    <div class="tab-content">

                        <div class="tab-pane animated active fadeInRight" id="general">
                            <div class="user-profile-content">

                                {!! Form::open(['url' => '/admin/configuration', 'files'=>true]) !!}

                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        {!! Form::label('application_title','Nom de l\'application',[])!!}
                                        {!! Form::input('text','application_title',(array_key_exists('application_title', $config)) ? $config['application_title'] : '',['class'=>'form-control','placeholder'=>'nom de l\'application'])!!}
                                      </div>
                                      <div class="form-group">
                                        {!! Form::label('company_name','Entreprise',[])!!}
                                        {!! Form::input('text','company_name',(array_key_exists('company_name', $config)) ? $config['company_name'] : '',['class'=>'form-control','placeholder'=>'Nom de l\'entreprise'])!!}
                                      </div>

                                      <div class="form-group">
                                        <label class="col-md-2 control-label" for="avatar">Logo</label>
                                            @if($config['logo'])
                                            <img src="/images/{{$config['logo'] }}" alt="logo">
                                            @endif
                                            <div class="input-group">
                                                <input class="btn btn-default" name="logo" type="file">
                                            </div>
                                      </div>

                                     <div class="form-group">
                                        {!! Form::label('color1','couleur de base',[])!!}
                                        {!! Form::input('text','color1',(array_key_exists('color1', $config)) ? $config['color1'] : '',['class'=>'form-control','placeholder'=>'couleur de base', 'id'=>'color1'])!!}
                                      </div>

                                        {!! Form::hidden('config_type','general')!!}
                                        {!! Form::submit(isset($buttonText) ? $buttonText : 'enregistrer',['class' => 'btn btn-primary']) !!}
                                    </div>


                                {!! Form::close() !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link href="/assets/admin/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
@endsection

@section('scripts')
<script src="/assets/admin/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script>
$(function(){
    $('#color1').colorpicker();
});
</script>
@endsection