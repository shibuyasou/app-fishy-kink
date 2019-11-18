<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>followers</title>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/Follow.css">

</head>
<body>
        <div class="tabs">
        <input id="follow" type="radio" name="tab_item" checked>
        <label class="tab_item1" for="follow">フォロー中</label>

        <input id="follower" type="radio" name="tab_item" checked>
        <label class="tab_item2" for="follower">フォロワー</label>
      
<!-- フォロー中表示 -->
    <div class="tab_content2" id="follow_content">
        @isset($followingData)
            @isset($followingData["follow"][0])
                @if(count($userProfile["follow"]) == 1)
                            <ul class ="list_none">
                                <li>
                                <a onclick="location.href='/profile?user={{$following['userID']}}'"><img src='{{$following["userImg"]}}'/></a>
                                        {{$following["userName"]}}    
                                    <button class="word_btn" type="button" onclick="location.href='/profile?user={{$following['userID']}}'">
                                        <span>@</span>{{$following["userID"]}}
                                    </button>
                                    <div class="profilePro">{{$following["profile"]}}</div>
                                </li>
                            </ul>
                @elseif(count($userProfile["follow"]) > 1)     
                    @foreach ($followingData["follow"] as $key => $following)
                        <ul class ="list_none">
                            <li>
                            <a onclick="location.href='/profile?user={{ $following }}'"><img src='{{ $followingImg[$key]}}'/></a>
                                    {{$followingName[$key]}}    
                                <button class="word_btn" type="button" onclick="location.href='/profile?user={{ $following }}'">
                                <span>@</span>{{ $following }}
                                </button>
                                <div class="profilePro">
                                    {{ $followingPro[$key] ,$key = $key + 1 }} 
                                </div>
                            </li>
                        </ul>
                    @endforeach
                @endif
            @endisset
        @endisset
                    
    </div>

    <!-- フォロワー表示 -->
    <div class="tab_content1" id="followerS_content">
        <ul class="list_none" id="list">
        </ul>
    </div>


    <div>
        <button  class="btn-square" type="button" onclick="location.href='/profile?user{{$_GET['user']}}'">戻る</button>
    </div>  

</body>
</html>
