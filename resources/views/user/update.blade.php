
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<form action="{{ url('user/update') }}" method="post" class="border p-4 rounded shadow-sm bg-light">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" value="{{$user[0]->name}}" name="name" class="form-control" required>
    </div>
    
    <input type="hidden" value="{{$user[0]->id}}" name="id">
    
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" value="{{$user[0]->email}}" name="email" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" value="{{$user[0]->phone}}" name="phone" class="form-control" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>