@include('common.adminHeader', ['title' => 'Add Services'])
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
        <a href="{{route('servicegroup.show')}}">Add IMEI Service Group</a>
    </div>
    <h1 class="mainheading">ADD SERVICE</h1>
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
        <form action="{{route('addServices')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="service_group">Select Service Group:</label>
            <select name="service_group" id="service_group">
                <option value="">Select Service Group</option>
                @foreach ($serviceGroups as $group)
                    <option value="{{ $group->id }}">{{ $group->title }}</option>
                @endforeach
            </select>
            <label for="title">Title</label>
            <input type="text" class="" name="title" value="{{old('title')}}">
            <label for="price">Price</label>
            <input type="numeric" class="" name="price" value="{{old('price')}}">
            <label for="costprice">Cost Price</label>
            <input type="numeric" class="" name="costprice" value="{{old('costprice')}}">
            <label for="supplier">Supplier</label>
            <input type="text" class="" name="supplier" value="{{old('supplier')}}">
            <label for="deliverytime">Delivery Time</label>
            <input type="text" class="" name="deliverytime" value="{{old('deliverytime')}}">

            <!-- Radio Buttons -->
            <div class="radio-group">
                <label for="servicetype">Service Type</label>
                <input type="radio" name="servicetype" value="Database"> Database
                <input type="radio" name="servicetype" value="Recalculate"> Recalculate
            </div>

            <!-- Radio Buttons -->
            <div class="radio-group">
                <label for="fieldtype">IMEI Field Type</label>
                <input type="radio" name="fieldtype" value="Both" id="Both"> Both
                <input type="radio" name="fieldtype" value="Single" id="Single"> Single
                <input type="radio" name="fieldtype" value="Multiple" id="Multiple"> Multiple
                <input type="radio" name="fieldtype" value="Custom" id="customFieldType"> Custom
                <div id="customFieldTypeContainer" class="d-none">
             @foreach ($customFields as $item)
             <input type="checkbox" name="custom_field_values[]" value="{{$item->name}}"> {{$item->name}}
             @endforeach


                    <button onclick="showAddCustomField(event)" class="btn-primary font-bold">+</button>

                
                    

                    <div id="addCustomField" class="d-none bg-light p-4">
    
                        <input type="text" id="newCustomField">
                        <button onclick="getCustomField(event)" class="btn btn-success"> ADD</button>
                    </div>
                </div>
            </div>

            <label for="image">Image</label>
            <input type="file" name="image" accept="image/*">
            <label for="details">Details</label>
            <textarea name="details" id="" cols="30" rows="10">{{ old('details') }}</textarea>


            <!-- Checkboxes -->
            <div class="checkbox-group">
                <label>Features</label><br>
                <input type="checkbox" name="feature[]" value="Refund available if code is not found"> Refund available if
                code is not found<br>
                <input type="checkbox" name="feature[]" value="Service available 24 * 7"> Service available 24 * 7<br>
                <input type="checkbox" name="feature[]" value="Unlock guaranteed"> Unlock guaranteed<br>
                <input type="checkbox" name="feature[]" value="No Refund for bad requests"> No Refund for bad requests<br>
                <input type="checkbox" name="feature[]" value="Working on business days only"> Working on business days
                only<br>
            </div>

            <div style="" class="mt-3">
                <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<script>
    const customFieldType = document.getElementById('customFieldType');
    const customFieldTypeContainer = document.getElementById('customFieldTypeContainer');
    const Both = document.getElementById('Both');
    const Single = document.getElementById('Single');
    const Multiple = document.getElementById('Multiple');
    console.log(customFieldType.value);
    customFieldType.addEventListener("change", function() {

        if (customFieldType.checked) {
            customFieldTypeContainer.classList.remove('d-none');

        }

    });

    async function getCustomField(e) {
    e.preventDefault();
    let newCustomField = document.getElementById('newCustomField').value;

    // Send a POST request to the Laravel endpoint
    const response = await fetch('/add-custom-field', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}', // Replace with your CSRF token
        },
        body: JSON.stringify({
            newCustomField: newCustomField
        })
    });

    if (response.ok) {
        const data = await response.json();
        console.log(data.message);

        // Add a checkbox and label dynamically in a row
        const checkboxContainer = document.getElementById('customFieldTypeContainer');

        // Create a div for the row
        const rowDiv = document.createElement('div');
        rowDiv.classList.add('checkbox-row'); // Add a CSS class for styling

        // Create the checkbox input element
        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.name = 'fieldtype[]';
        checkbox.value = newCustomField;
        checkbox.classList.add('custom-checkbox'); // Add a CSS class for styling

        // Create the label element
        const label = document.createElement('label');
        label.textContent = newCustomField;
        label.classList.add('custom-label'); // Add a CSS class for styling

        // Append the checkbox and label to the row div
        rowDiv.appendChild(checkbox);
        rowDiv.appendChild(label);

        // Append the row div to the container
        checkboxContainer.insertBefore(rowDiv, checkboxContainer.firstChild);


        // Clear the input field
        document.getElementById('newCustomField').value = '';
    } else {
        console.error('Error:', response.status);
    }
}


    function showAddCustomField(e) {
        e.preventDefault();
document.getElementById('addCustomField').classList.remove('d-none');
    }
</script>

@include('common.adminFooter')
