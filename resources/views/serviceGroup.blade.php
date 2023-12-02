@include('common.adminHeader', ['title' => 'Add Services Group'])
<style>
    .center-form {
        display: block !important;
        width: 70%;
        margin: auto;
    }
    label{
        font-weight: bold;
    }
    .custom-label,.custom-checkbox{
        display: inline-block;
        font-weight: 300;
    }
    .checkbox-row{
        display: flex;
        align-items: center
    }
</style>
<div class="container">
    <div class="top">
        <a href="{{route('addServices.show')}}">Add Service </a>
    </div>
    <h1 class="mainheading">ADD SERVICE Group</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="container center-form">
        <form action="{{route('addServiceGroup')}}" method="POST" >
            @csrf
            <label for="category">Category</label>
            <input type="text" class="" name="category">
            <label for="title">HTML Title</label>
            <input type="text" class="" name="title">
            <label for="url">SEO URL Name</label>
            <input type="text" class="" name="url">
            
            <label for="metatags">Meta Tag(s)</label>
            <textarea name="metatags" id="" cols="30" rows="10"></textarea>
            <label for="metakeyword">Meta Keyword(s)</label>
            <textarea name="metakeyword" id="" cols="30" rows="10"></textarea>


          
           
            <label for="details">Details</label>
            <textarea name="details" id="" cols="30" rows="10"></textarea>

            <!-- Checkboxes -->
            <div class="checkbox-group">
                <label>Remote Category</label>
                <input type="checkbox" name="remotecategory" id="">Remote Category
                
            </div>
             <!-- Checkboxes -->
             <div class="checkbox-group">
                <label>Disable</label>
                <input type="checkbox" name="disable" id="">disable
                
            </div>

            <div style="" class="mt-3">
                <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>


@include('common.adminFooter')
