 @extends('admin.layout.app')

 @section('style')
 @endsection 

 @section('content')



                    {{-- ----cardd --}}
                    <div class="container   ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header  =">
                                        <h4>How to Fetch data in Laravel 8  
                                            <a href="{{ route('studentForm') }}" > <button class="float-right  text-white bg-success">Add</button> </a>
                                           
                                        
                                        </h4>
                                        
                                        
                                    </div>
                                    <div class="card-body">
                    
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Class</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($student as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->address }}</td>
                                                    <td>{{ $item->class }}</td>
                                                    <td>
                                                        <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger btn-sm  " onclick="return confirm('Are you sure you wish to delete this record?');"  >Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                 
                    @endsection


          @section('scripts')
          
          @endsection

