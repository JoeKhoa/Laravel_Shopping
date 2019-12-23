
  

  @extends('layouts.masterlayout')


  @section('content')
  
  <div class="row col-12 " style="margin:20px;">
      @foreach ($CateProducts as $prod)
          <div class="product row col-4 bg-col bg-info m-1" style=" float:left;width :24%;margin:5px !important;">
            <p>{{$prod->name}}</p>
          </div>
      @endforeach 
  </div>

  <div class="link">
      {{$CateProducts->links()}}
  </div>

  @endsection

    