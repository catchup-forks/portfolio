@extends('layouts.master')

@section('title')
About | @parent
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>About me</h1>
        <img src="//www.gravatar.com/avatar/{{ md5('n.widart@gmail.com') }}?size=200" alt="Nicolas Widart Profile picture" class="img-circle pull-right"/>
        <p>
        I'm <strong>PHP developer</strong> <br/>
        I'm a <strong>Laravel</strong> evangelist <br/>
        I focus on creating clean and simple websites <br/>
        I host your websites
        </p>

        <p>
        Nicolas Widart, born 23th september 1990, lives in a little town called Kampenhout, located in Belgium. Nicolas speaks 3 languages: French, Dutch and English. The last 2 years of high school he studied IT Management. After that he went to Haute Ecole Albert Jaquart university to follow "Webdesign & multimedia". He graduated top of the section with a mention of the jury.
        </p>
        <p>
            Quickly after, in august 2013 Nicolas started working at a webdesign agency called '<a href="http://www.dogstudio.be" target="_blank">Dogstudio</a>', where he works as a full time <strong>php developer</strong>.
        </p>

        <p>Nicolas loves listening to all different kinds of music, but especially the electro and r&b style. In hes spare time he's going to the movies to watch the latest movie out.</p>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h2>Skills</h2>
        <ul class="bullet">
            <li>PHP</li>
            <li>Laravel</li>
            <li>Clean code (SOLID principles, clean architecture, ...)</li>
            <li>Git Source Control</li>
            <li>Svn Source Control</li>
            <li>eCommerce websites</li>
            <li>Wordpress</li>
            <li>HTML5/CSS5 & javascript (jQuery)</li>
            <li>Basic server management & unix commands</li>
        </ul>
    </div>
    <div class="col-md-6">
        <h2>Find me on</h2>
        <ul class="bullet">
            <li>
                <a href="https://github.com/nWidart" target="_blank">Github</a>
            </li>
            <li>
                <a href="http://be.linkedin.com/pub/nicolas-widart/25/7ab/a63" target="_blank">LinkedIn</a>
            </li>
            <li>
                <a href="http://twitter.com/nicolaswidart" target="_blank">Twitter</a>
            </li>
        </ul>

    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h2>Download</h2>
        <ul class="no-padding">
            <li>
                <a href="{{ asset('cv/Nicolas Widart CV_EN.pdf') }}" target="_blank"><i class="glyphicon glyphicon-circle-arrow-down"></i> My Curriculum Vitae in English</a>
            </li>
            <li>
                <a href="{{ asset('cv/Nicolas Widart CV_FR.pdf') }}" target="_blank"><i class="glyphicon glyphicon-circle-arrow-down"></i> My Curriculum Vitae in French</a>
            </li>
            <li>
                <a href="{{ asset('cv/Nicolas Widart CV_NL.pdf') }}" target="_blank"><i class="glyphicon glyphicon-circle-arrow-down"></i> My Curriculum Vitae in Dutch</a>
            </li>
        </ul>
    </div>
</div>
@stop