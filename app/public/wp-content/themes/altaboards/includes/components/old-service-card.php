<?php

wp_utils_verify_abspath();

$card_info = $args['card_info'] ?? '';

if(empty($card_info)){
    return;
}
?>

<div class="flex flex-col w-full gap-4 p-8 border border-[#5B6067] border-opacity-30 rounded-lg bg-white shadow-lg xl:w-[25%] md:w-[45%]">
    <img class="w-14 h-auto self-center" src="<?php echo $card_info['image'] ?>">

    <span class="self-center text-lg font-cabin font-bold text-jade"><?php echo $card_info['title'] ?></span>

    <span class="text-center self-center text-base font-normal text-midgray"><?php echo $card_info['description'] ?></span>
</div>