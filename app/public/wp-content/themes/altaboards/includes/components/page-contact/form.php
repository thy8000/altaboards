<?php

if (!defined('ABSPATH')) exit;

?>

<section class="bg-teal-50">
   <div class="custom-container">
      <div class="flex flex-col-reverse py-14 gap-[3.75rem] lg:flex-row">
         <div class="basis-7/12">
            <?php echo do_shortcode('[wpforms id="31"]') ?>
         </div>

         <div class="basis-5/12 flex flex-col">
            <h2 class="text-4xl font-normal text-jade font-cabin">
               <?php esc_html_e('Envie-nos uma mensagem!', 'it9-obrasoft') ?>
            </h2>

            <h3 class="text-base font-normal text-gray-600">
               <?php esc_html_e('Quer instalar o nosso aplicativo, conhecer nossas soluções, tirar dúvidas, ou nos dar sua opinião/feedback ? Envie-nos uma mensagem, que iremos lhe responder.', 'it9-obrasoft') ?>
            </h3>
         </div>
      </div>
   </div>
</section>
