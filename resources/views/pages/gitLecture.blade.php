@extends('layouts.default')

@section('content')
<div class="gitLecturebg bgImageProp center">
    <div class="more">
        <h1>Git and Github</h1>
        <div class="moreContent col-sm-12 col-lg-9 mx-auto">      
        &emsp;&emsp;Git and GitHub are two important tools that every developer, regardless of area, should understand. You might think these two terms mean the same thing, but they don't.<br><br> 
        <h5><b>What is Git?</b></h5>      
        &emsp;&emsp;Git is a version control system that allows you to track changes to your files over time. You may revert to different states of your files using Git. You may also make a copy of your file, make changes to it, and then merge the changes back into the original.<br> 
        &emsp;&emsp;For example, you may be working on a landing page for a website and notice that you dislike the navigation bar. However, you may not want to start changing its components because it may worsen. You may use Git to make an identical clone of that file and experiment with the navigation bar. When you're through making changes, you may merge the duplicate with the original file.<br>
        &emsp;&emsp;You can download git <a class="link" href="https://git-scm.com/downloads" target="_blank">here</a>, and install it with the help of <a class="link" href="https://git-scm.com/book/en/v2/Getting-Started-Installing-Git" target="_blank">this</a>. <br><br>

        <h5><b>What is Github?</b></h5>      
        &emsp;&emsp;<a class="link" href="https://github.com/" target="_blank">GitHub</a> is an online repository hosting service. Consider working on a project at home and suddenly remembering the answer to a coding mistake that has been bothering you for days while you are away, perhaps at a friend's house. Because your PC is not with you, you are unable to make these adjustments. However, if your project is stored on GitHub, you may access and download it with a command on any computer you have access to. Then make your modifications and push the most recent version back to GitHub.<br>
        &emsp;&emsp;To summarize, GitHub allows you to host your repository on their platform. Another fantastic benefit of GitHub is the opportunity to interact with other developers from anywhere in the world.<br><br>
        <center>
        <a href="https://www.freecodecamp.org/news/10-important-git-commands-that-every-developer-should-know/" target="_blank"><img src="{{URL::asset('/gitLectureImg/git.png')}}" style="width:320px;height:320px;"></a>

        <a href="https://www.coredna.com/blogs/what-is-git-and-github-part-two" target="_blank"><img src="{{URL::asset('/gitLectureImg/github.png')}}" style="width:320px;height:320px;"></a>

        <br> <br><a href="/lectures" class="btn btn-success">Lectures List</a></center>
        </div>
    </div>      
</div>

@stop