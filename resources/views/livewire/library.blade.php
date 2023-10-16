<div class="overflow-x-auto">
    <div>
        <a class="btn btn-primary" href="/upload" wire:navigate>Upload</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                </tr>
            @endforeach
    </table>
</div>
