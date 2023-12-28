<style>
    .manage-tile {
        display: flex;
        margin:auto; 
        color:white; 
        background-color :red;
        transition: all 0.4s ease-in-out;
        border: 1px solid black;
    }
    .manage-tile:hover {
        color:black; 
        background-color :rgb(255, 135, 135);
    }
</style>

<x-layout>
    <div class="lg:flex gap-12 m-14 justify-center align-center">
        <a href="/manage/menu" class="text-4xl rounded manage-tile p-24">
            <p>Edit Menu</p>
        </a>
        <a href="/manage/tables" class="text-4xl rounded manage-tile p-24">
            <p>View Table Orders</p>
        </a>
    </div>
</x-layout>