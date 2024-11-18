<x-layout>

<?php foreach($sicknesses as $sickness) :?>
<div class="container mx-auto px-10">
<ul role="list" class="divide-y divide-gray-100">
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
      <div class="min-w-0 flex-auto">
        <p class="text-sm font-semibold leading-6 text-gray-900">{{$sickness->name}}</p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$sickness->description}}</p>
        <?php if ?>
          <p>TRATAMENTO</p>
          <?php foreach($sickness->treatments as $treatment) :?>
            <?php dd($sickness->treatments) ?>
          <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$treatment->name}}</p>
          <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$treatment->description}}</p>
          <?php endforeach ?>
          <?php endif ?> 
      </div>
    </div>
  
  </li>
</ul>
</div>



<?php endforeach ?>
</x-layout>