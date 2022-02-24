<div class="flex flex-col text-left">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow-sm overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        {{ $tableColumn }}

                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        {{ $tableRow }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
