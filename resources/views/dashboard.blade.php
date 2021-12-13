<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
       <div class="row">
        <h1 class="text-left m-4" >Active Posts</h1>

        <div class="col-md-8">
              
              <table class="table mt-4">
                <thead class="thead-info">
                  <tr>
                    <th scope="col">Book Name</th>
                    <th scope="col">Post Type</th>
                    <th>change status </th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($posts->first())
                        @foreach ($posts as $post)
                        @if ($post->postStatus==0)
                        <tr>
                            <td>{{$post->courseName ??''}}</td>
                            <td>{{$post->type['name'] ??''}}</td>
                       
                            <td> <a href="{{route('changeStatu',$post->id)}}" class="btn btn-warning">Make Done Post </a></td>
                            <td>  <a href="" class="btn btn-info">Show Details</a>  </td>
                          </tr>
                          @endif
                        @endforeach
                    @endif
              
            
                </tbody>
              </table>
        </div>

        <div class="col-md-4">
            <span class="btn btn-dark m-4 w-75">ADD New Post</span>
            <form method="POST" enctype="multipart/form-data"  action="{{route("newPost")}}"  >
                @csrf
                <input type="hidden" name="user_id" value="{{$user_id}}">
                <div class="card-body">
                    <div class="form-group col-md-12 ">
                      <label for="exampleInputEmail1">Post Type</label>

                      <select class="form-select" aria-label="Default select example" name="post_types_id">
                        <option selected>select type of post </option>
                        @foreach ($postTypes as $type)
                        <option value="{{$type->id}}">{{$type['name']??''}}</option>

                        @endforeach
                   
                      </select>

                    </div>
                    <div class="form-group   ">
                      <label for="exampleInputEmail1">Post Title :</label>
                      <input type="text" class="form-control w-100"  name="title"  id="exampleInputEmail1" placeholder="Enter title">
                    </div>
                 
              
                  <div class="form-group ">
                    <label for="exampleInputEmail1">Description :</label>
                    <textarea name="description" id="" class="w-100"></textarea>
                  </div>
              
                  <div class="form-group mt-4 mb-4 ">
                    <label for="exampleInputEmail1"> Image of Book :</label>
                    <input type="file" class="form-control w-100"  name="image"  id="exampleInputEmail1" placeholder="uplode image">
                  </div>
              
                  <div class="form-group  ">
                    <label for="exampleInputEmail1">course Name : </label>
                    <input type="text" class="form-control w-100"  name="courseName"  id="exampleInputEmail1" placeholder="Enter The course name is unveristy ">
                  </div>
              
                  <div class="form-group">
                    <label for="exampleInputEmail1"> 	course Code :</label>
                    <input type="text" class="form-control w-100"  name="courseCode"  id="exampleInputEmail1" placeholder="course code like 1402541-4">
                  </div>
                   
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Contact with you By  :</label>
                    <select class="form-select" aria-label="Default select example" name="contactWay">
                        <option selected>select platfrom to contact  </option>
                        <option value="whatsapp">whatsApp</option>
                        <option value="Telegram">Telegrame</option>
                        <option value="Twitter">Twitter</option>
                        <option value="Instagrame">Instagrame</option>       
                   
                      </select>
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputEmail1"> 	Add Your Phone Number of Account  :</label>
                    <input type="text" class="form-control w-100"  name="contactLink"  id="exampleInputEmail1" placeholder="Enter Account">
                  </div>
               
              
              
               
                </div>
                <!-- /.card-body -->
              
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary w-100 text-center">Submit</button>
                </div>
              </form>

       </div>
      
       
</x-app-layout>
