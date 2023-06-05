@foreach ($drivers as $position=>$driver)
    <li class="standing__driver position--{{$position+1}}">
        <div class="standing__driver--fullname">
            <h3 class="standing__driver__firstname">{{$driver->FirstName}}</h3>
            <h3 class="standing__driver__lastname">{{$driver->Lastname}}  </h3>
        </div>
        <h3 class="standing__driver--points">{{$driver->points}}</h3>
    </li>
@endforeach


<style>
    .standing__driver{
        display: flex;
        justify-content: space-between;
        padding: .5rem 2rem;
        color: var(--text)
    }

    .standing__driver:nth-child(even){
        background-color:var(--background-dark);
    }

    .standing__driver--fullname{
        display: flex;
        gap: 1rem;
    }
    .standing__driver h3{
        font-size: 3.2rem;
    }
</style>
