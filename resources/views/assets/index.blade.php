<x-app-layout>
   <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Categoria</th>
                <th>Estat</th>
                <th>Ubicació</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assets as $asset)
                <tr>
                    <td>{{ $asset -> nom }}</td>
                    <td>{{ $asset -> category->nom }}</td>
                    <td>{{ $asset -> estat }}</td>
                    <td>{{ $asset -> ubicacio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
