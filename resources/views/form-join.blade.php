<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
</head>
<body>
    <div class="container mx-auto">
        <div class="w-9/12 mx-auto border border gray-300 rounded bg-green-200 mt-20 px-5 py-5 bg gray 200">
            <div class="w-full  ">
                <div class="col-span-4  ">
                    <div class="w-full grid grid-cols-4 gap-4 sm:grid-cols-3 md:grid-cols-4  ">
                      <div class="mb-10 ">
                          <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer ">
                              <div class="w-full relative ">
                                <img src="https://cbu01.alicdn.com/img/ibank/2019/356/039/11361930653_1075016752.220x220.jpg" alt="" class="w-full">
                              </div>
                          </div>
                      </div>
                
                      <div class="mb-10">
                          <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer">
                            <div class="w-full relative ">
                                <img src="https://cbu01.alicdn.com/img/ibank/O1CN01cBZkQO26dmTNnQSS1_!!2212476667685-0-cib.220x220.jpg" alt="" class="w-full">
                            </div>
                          </div>
                      </div>
                
                      <div class="mb-10">
                          <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer">
                              <div class="w-full relative">
                                <img src="https://cbu01.alicdn.com/img/ibank/2020/661/523/22727325166_1372514683.220x220.jpg" alt="" class="w-full">
                              </div>
                          </div>
                      </div>
                
                      <div class="mb-10">
                          <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer">
                              <div class="w-full relative">
                                <img src="https://cbu01.alicdn.com/img/ibank/O1CN0117pnDP1IS7ZolZNHX_!!979450891-0-cib.220x220.jpg" alt="" class="w-full">
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            
                <h1 class="my-20 font-bold text-center">Form Join Student</h1>
                <hr>
                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                    
                @endif
                
                <form action="{{ url('/join') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control">
                        @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary text-black font-bold">Join</button>       
                </form>
            </div>       
        </div>
    </div>
    

  

   

    
</body>
</html>