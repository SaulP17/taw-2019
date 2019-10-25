@extends('principal')
@section('contenido')    
    
    <template v-if="menu==0">
        <!-- <example-component></example-component> -->
    </template>

    <template v-if="menu==2">
    <categoria-component></categoria-component>
    </template>

    <template v-if="menu==3">
    <!-- <articulos-component></articulos-component> -->
    </template>

    <template v-if="menu==4">
        <h1>item 3</h1>
    </template>
    

@endsection
