@extends('Layouts.Users.Main')
@section('content')

{{-- main container --}}
<div class="contentPage">
   
    {{-- first container --}}
    <div class="ContainerInsideKontent">
        <div class="ContainerVideoPost">
            {{-- <form action="">
                <input type="file" >
                <input type="button" value="">
            </form> --}}
         
            {{-- Video Upload tools --}}
            <div class="ContainerVideoUploadTools">
                
                <div class="ContainerUploadButton">
                 
                    <input type="file" id="fileUpload" hidden/>
                    <label class="labelUpload" for="fileUpload">
                        <div>
                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                        </div>
                        Upload
                    </label>
                </div>
                <div class="ContainerUploadButton">
                    <button class="btnAddFolderVideos">
                        <div>
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div>
                            
                        </div>
                        Add Folder
                    </button>
                </div>
             
            </div>

              {{-- Video Modify line --}}
            <div class="ContainerVideoModify">
                <?php
 
                $arr=[['name'=>'Refresh','class'=>'btnVideoModifyButton','icon'=>'<i class="fa-solid fa-rotate-right"></i>'],
                ['name'=>'Move','class'=>'btnVideoModifyButton','icon'=>'<i class="fa-solid fa-compress"></i>'],
                ['name'=>'Export','class'=>'btnVideoModifyButton','icon'=>'<i class="fa-solid fa-file-arrow-down"></i>'],
                ['name'=>'Public','class'=>'btnVideoModifyButton','icon'=>'<i class="fa-solid fa-eye"></i>'],
                ['name'=>'Private','class'=>'btnVideoModifyButton','icon'=>'<i class="fa-solid fa-eye-slash"></i>'],
                ['name'=>'Delete','class'=>'btnVideoModifyButton1','icon'=>'<i class="fa-solid fa-trash-can"></i>']];


                ?>
                    {{-- @foreach ($arr as $item) --}}
                    <?php
                    foreach($arr as $item){
                    ?>
                    <button class="{{$item['class']}}" type="submit">
                        <div>
                        
                         
                           <?php echo $item['icon'];?>
                          
                        </div>
                        <div>
                            {{-- Refresh --}}
                         
                            {{$item['name']}}
                        </div>
                      
                    </button> 
                    {{-- @endforeach --}}
                    <?php } ?>
            </div>
           
        </div>

        <div class="TableVideoContent">
            <table class="TableReports">
                <thead>
                    <tr>
          
                        <th class="chexBoxTableLine">
                            <label class="ContainerInputCheckbox">
                                <input type="checkbox" class="checkBoxTable">
                                <span class="checkMark"></span>
                            </label>
    
                        </th>
                        <th>
                            File name
                        </th>
                        <th>
                            Size
                        </th>
                        <th>
                            Created
                        </th>
                        <th>
                            Views
                        </th>
                        <th>
                            Public
                        </th>
        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="chexBoxTableLine">
                            <label class="ContainerInputCheckbox">
                                <input type="checkbox" class="checkBoxTable">
                                <span class="checkMark"></span>
                            </label>
                        </td>
                        <td>
                            Naruto
                        </td>
                        <td>
                            30 gb
                        </td>
                        <td>
                            20/01/2020
                        </td>
                        <td>
                            30 views
                        </td>
                        <td>
                            Yes
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
        <div class="ContainerVideoPagination">
            <div class="VideoPagination">
           
                <div>
                    25 of 1 Videos
                </div>
                <div class="numberPage" >
                    1
                </div>
               
            </div>

            <div class="paginationContainer" >
                <div class="dataPagination" >
                    25 Per Page 
                </div>
               <div>
                <i style="margin-left" class="fa fa-angle-down" aria-hidden="true"></i>
               </div>
                
            </div>
        </div>
           
       
      

    </div>
   
</div>  

@endsection