      <?php if($message = Session::get('success')): ?>
        <script>
    
          toastr.success(' <?php echo e($message); ?> ');

        </script>
      <?php endif; ?>

      <?php if($message = Session::get('error')): ?>
        <script>
         
            toastr.error(' <?php echo e($message); ?> ');
        </script>
      <?php endif; ?>

      <?php if($message = Session::get('warning')): ?>
        <script>
          
            toastr.warning(' <?php echo e($message); ?> ');
          
        </script>
      <?php endif; ?>
      
      <?php if($message = Session::get('info')): ?>
        <script>
          
            toastr.info(' <?php echo e($message); ?> ');
          
        </script>
      <?php endif; ?>
      <?php /**PATH /home/mukalama/public_html/resources/views/components/notifications.blade.php ENDPATH**/ ?>