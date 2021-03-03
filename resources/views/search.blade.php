<form action="{{ url('/search') }}" method="get">
  @csrf
    <input type="search" name="search" placeholder="Search Applicant">
    <button type="submit" class="btn btn-primary">Search</button>
    </form>