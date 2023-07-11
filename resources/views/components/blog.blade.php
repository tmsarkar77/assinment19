
@extends('app')
@section('content')
    
    <div style="width: 1040px;">
        <div class="mx-auto"> 
        <h2 class="my-3">Feature Post</h2>
        <div id="post-list" class="container my-2">
         
            
        </div>
    </div>
    </div>

    <script>
      postList()
        async function postList() {
           let URL = '/postdata';
           try{
             const response = await axios.get(URL);
             response.data.forEach((item)=>{
                  document.getElementById("post-list").innerHTML+=(
                    `<div class="card mb-3" style="max-width: 840px;">
                  <div class="row g-0">
                  <div class="col-md-4">
                    
                    <img  class="img-fluid" src="${item['image']}" alt="..." />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="{{ route('singlepost')}}"> 
                      <h5 class="card-title">${item['title']}</h5>
                      <p class="card-text">${item['name']}</p>
                      <p class="card-text">${item['des']}</p>
                      <p class="card-text"><small class="text-muted">${item['created_at']}</small></p>
                    </a>
                    </div>
                  </div>
                </div>
              </div>

                      `
                  )
             })
           }catch(error){
             console.log(error);
           }
        
         
         
         }

    </script>
    
@endsection



