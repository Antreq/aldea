<!DOCTYPE html>
<html lang="en">

@extends('layouts.header')
@section('content')

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

 
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Crear proyecto</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### faq Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 wow fadeInUp" data-wow-delay="100ms">
                    <h3>Para la creación de tu proyecto procede a llenar el siguente cuestionario:</h3>
                </div>
            </div>
        	<div class="about-us-area ">
			        <form>
			            <div class="form-group">
			                <label for="nombre_proyecto"><h6>Nombre proyecto</h6></label>
			                <input type="text" class="form-control" id="nombre_proyecto">
			            </div>
			            <div class="form-group">
			                <label for="descripcion"><h6>Descripcion del proyecto</h6></label>
			                <textarea class="form-control" id="descripcion" rows="3"></textarea>
			            </div>
			            <div class="form-group">
			                <label for="no_integrante"><h6>Numero de integrantes</h6></label>
			                <input type="num" class="form-control" id="no_integrante">
			            </div>
						<div class="form-group">
			                <label for="perfil"><h6>Perfil de los integrantes</h6></label>
			                <input type="text" class="form-control" id="perfil">
			            </div>
						<div class="form-group">
						  <label for="imagen_pro"><h6>Imagen proyecto</h6></label>
						  <input type="file" class="form-control-file" id="imagen_pro">
						</div>


			            <div class="form-group" id="enviar">
			                <button type="submit" class="btn btn-default" id="confirm-purchase">Crear</button>
			            </div>
			        </form>
			    </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    
    <!-- ##### Features Area Start ##### -->
@endsection
