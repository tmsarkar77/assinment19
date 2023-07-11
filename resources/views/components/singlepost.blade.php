@extends('app')
@section('content')

    <div id="single-post-list">
        <div class="d-flex justify-content-end my-3">
            <a href="{{url('/')}}" class="btn btn-primary">Back</a>
        </div>
        
    </div>  
    <div class="card">
      <div class="card-header">
        Comments
      </div>
    <div id="comment-data">
    
    </div> 
  </div>
  <script>
    singlepost()
      async function singlepost() {
         let URL = '/postdata';
         try{
           const response = await axios.get(URL);
           response.data.forEach((item)=>{
                document.getElementById("single-post-list").innerHTML+=(
                    `
                    <div class="card" >
                        <img src="${item['image']}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">${item['title']}</h5>
                        <p class="card-text">${item['des']}</p>
                        
                        </div>
                       
                    </div>
                    <div class="d-flex justify-content-end my-3">
                        <a href="{{route('commentpage')}}" class="btn btn-primary">Comment</a>
                    </div>
                    `
              
                )
           })
         }catch(error){
           console.log(error);
         }
      
       
       
       }

  </script>

<script>
  commentdata()
    async function commentdata() {
       let URL = '/commentdata';
       try{
         const response = await axios.get(URL);
         response.data.forEach((item)=>{
              document.getElementById("comment-data").innerHTML+=(
                  `
                  
                  <div class="card-body border-bottom border border-primary">
                    <h5 class="card-title">${item['name']}</h5>
                    <p class="card-text">${item['des']}</p>
                    
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
