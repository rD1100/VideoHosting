@extends('Layouts.Users.Main')
@section('content')

<div class="contentPage">
   <div class="ProfileContainer">

        <div class="ContainerProfileImage" >
            
                <div class="ContainerImage" >
                    <img class="ImageProfile" width="180px" height="180px"  src="" alt="">
                </div>
                <div class="ContainerProfileImgDesc" >
                    <div style="TitleProfileImg">
                        Naruto
                    </div>
                    <div class="SubTitleProfileImg">
                        Free User
                    </div>
                    <div class="AdrressProfileImg">
                        Leave Village, Konohagakure, Indonesia
                    </div>


                    <div class="ContainerUserFollower">
                        <div>
                            <div class="AmounntDesc" >
                                100
                            </div>
                            <div class="Desc">
                                Posts
                            </div>
                        </div>

                        <div>
                            <div class="AmounntDesc">
                                100
                            </div>
                            <div class="Desc">
                                Followers
                            </div>
                        </div>

                        <div>
                            <div class="AmounntDesc">
                                100
                            </div>
                            <div class="Desc">
                                Following
                            </div>
                        </div>
                    </div>
    
                </div>
           
        </div>

        {{-- desc user profile --}}
        <div class="ContainerProfileDesc" >
            <?php
                $arr=[['label'=>'User Name','fill'=>'NarutoHokage7'],
                ['label'=>'Email','fill'=>'NarutoHokage7@gmail.com'],
                ['label'=>'Phone','fill'=>'+628212324344'],
                ['label'=>'Country','fill'=>'Indonesia']];

                foreach ($arr as $item ) {
            ?>
            <div class="ContainerFillProfile" >
                <div class="ContainerFillProfileDesc">
                    <div class="LabelProfileUser" >
                       {{$item['label']}}
                    </div>
                    
                    <div class="ContentProfilUser" >
                        {{$item['fill']}}
                    </div>
                   
                    
                </div>
            
           </div>
            <?php } ?>
           
            <form action="">
                <button class="ButtonEditUserProfile">
                    <div>
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <div>
                        Edit
                    </div>
                </button>
            </form>
        </div>
   </div>
</div>

@endsection