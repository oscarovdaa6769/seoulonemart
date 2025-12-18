<?php get_header(); ?>
<div class="product_list_section">
      <div class="nav_section">
            <p>Home</p>
            <i class="fa-solid fa-angle-right"></i>
            <p>All Products</p>
      </div>
      <h1>Korean Ramen & Quick Meals</h1>
      <div class="filter_item">
            <input type="checkbox" id="toggler">
            <label for="toggler" class="btn label_btn">All Products</label>
            <div class="sub-categories">
                  <i class="fa-solid fa-angle-right"></i>
                  <div class="btn sub-categories-item">Ramen</div>
                  <div class="btn sub-categories-item">Noodles</div>
                  <div class="btn sub-categories-item">Ready-to-Eat Meals</div>
            </div>
      </div>
      <div class="product_list_header">
            <h1>Filter</h1>
            <div class="left_side">
                  <p>Sort By</p>
                  <p class="btn">Best Seller <i class="fa-solid fa-angle-down"></i></p>
            </div>
      </div>
      <div class="product_list_container">
    
      <div class="product_list">
            <div class="product_list_filter filter-header-content" id="filter-header">
                  <h1>Ramen & Noodles</h1>
                  <i class="fa-solid fa-angle-down"></i>
            </div>
            
            <div class="filter-options" id="filter-options-content">
                  
                  <h3>Brand</h3>
                  <div class="left_side">
                        <input type="checkbox">
                        <p>Samyung</p>
                  </div>
                  <div class="left_side">
                        <input type="checkbox">
                        <p>Nongshim</p>
                  </div>
                  <div class="left_side">
                        <input type="checkbox">
                        <p>Paldo</p>
                  </div>
                  
                  <h3>Flavor</h3>
                  <div class="left_side">
                        <input type="checkbox">
                        <p>Hot</p>
                  </div>
                  <div class="left_side">
                        <input type="checkbox">
                        <p>Mild</p>
                  </div>
                  <div class="left_side">
                        <input type="checkbox">
                        <p>Cheese</p>
                  </div>
                  <div class="left_side">
                        <input type="checkbox">
                        <p>Jjajang</p>
                  </div>
                  
                  <h3>Type</h3>
                  <div class="left_side">
                        <input type="checkbox">
                        <p>Cup</p>
                  </div>
                  <div class="left_side">
                        <input type="checkbox">
                        <p>Pack</p>
                  </div>
                  
                  <h3>Spiciness Level</h3>
                  <div class="left_side">
                        <input type="radio" name="spiciness">
                        <p>Mild</p>
                  </div>
                  <div class="left_side">
                        <input type="radio" name="spiciness">
                        <p>Medium</p>
                  </div>
                  <div class="left_side">
                        <input type="radio" name="spiciness">
                        <p>Spicy</p>
                  </div>
                  <div class="left_side">
                        <input type="radio" name="spiciness">
                        <p>Extra Spicy</p>
                  </div>
                  
                  <div class="range-slider-container">
                        <div class="price-display">
                              <h3>Price Range: $<span id="range-min">0</span> - $<span id="range-max">1000</span></h3>
                        </div>

                        <div class="slider-wrapper">
                              <div class="slider-track-fill"></div>
                              
                              <input type="range" min="0" max="1000" value="0" step="10" id="min-range-input">
                              <input type="range" min="0" max="1000" value="1000" step="10" id="max-range-input">
                        </div>
                  </div>
                  
            </div>
      </div>
</div>


















      <div class="products">
      <?php while(have_posts()): the_post(); $price=get_post_meta(get_the_ID(),'_price',true); ?>
      <div class="product">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
      <h2><?php the_title(); ?></h2>
      <p>$<?php echo $price; ?>.00</p>
      </div>
      <?php endwhile; ?>
      </div>
</div>
<?php get_footer(); ?>









<script>
    // --- JAVASCRIPT FUNCTIONALITY ---
    document.addEventListener('DOMContentLoaded', () => {
        const minRangeInput = document.getElementById('min-range-input');
        const maxRangeInput = document.getElementById('max-range-input');
        const rangeMinDisplay = document.getElementById('range-min');
        const rangeMaxDisplay = document.getElementById('range-max');
        const trackFill = document.querySelector('.slider-track-fill');

        const MIN_GAP = 10; // Minimum allowed difference between min and max

        function updateRange() {
            let minVal = parseInt(minRangeInput.value);
            let maxVal = parseInt(maxRangeInput.value);
            const max = parseInt(maxRangeInput.max);

            // 1. Validation: Ensure min is always less than max (plus gap)
            if (maxVal - minVal < MIN_GAP) {
                // Determine which slider was moved and adjust the other one
                if (event.target.id === 'min-range-input') {
                    minRangeInput.value = maxVal - MIN_GAP;
                    minVal = parseInt(minRangeInput.value);
                } else {
                    maxRangeInput.value = minVal + MIN_GAP;
                    maxVal = parseInt(maxRangeInput.value);
                }
            }

            // 2. Update Display Text
            rangeMinDisplay.textContent = minVal;
            rangeMaxDisplay.textContent = maxVal;

            // 3. Update the Visual Track Fill
            const minPercent = (minVal / max) * 100;
            const maxPercent = (maxVal / max) * 100;

            // Set the starting point and the width of the blue track
            trackFill.style.left = minPercent + '%';
            trackFill.style.width = (maxPercent - minPercent) + '%';
        }

        // Initialize the track on load
        updateRange();

        // Add event listeners to update on change/move
        minRangeInput.addEventListener('input', updateRange);
        maxRangeInput.addEventListener('input', updateRange);
    });
</script>









<script>
    // --- JAVASCRIPT FOR COLLAPSIBLE FILTER & SLIDER ---
    document.addEventListener('DOMContentLoaded', () => {
        const filterHeader = document.getElementById('filter-header');
        const filterOptionsContent = document.getElementById('filter-options-content');

        // SLIDER ELEMENTS
        const minRangeInput = document.getElementById('min-range-input');
        const maxRangeInput = document.getElementById('max-range-input');
        const rangeMinDisplay = document.getElementById('range-min');
        const rangeMaxDisplay = document.getElementById('range-max');
        const trackFill = document.querySelector('.slider-track-fill');

        const MIN_GAP = 10;
        const MAX_VALUE = 1000;

        // SLIDER FUNCTIONALITY
        function updateRange(event) {
            let minVal = parseInt(minRangeInput.value);
            let maxVal = parseInt(maxRangeInput.value);
            
            // 1. Validation
            if (maxVal - minVal < MIN_GAP) {
                if (event && event.target.id === 'min-range-input') {
                    minRangeInput.value = maxVal - MIN_GAP;
                    minVal = parseInt(minRangeInput.value);
                } else {
                    maxRangeInput.value = minVal + MIN_GAP;
                    maxVal = parseInt(maxRangeInput.value);
                }
            }

            // 2. Update Display Text
            rangeMinDisplay.textContent = minVal;
            rangeMaxDisplay.textContent = maxVal;

            // 3. Update the Visual Track Fill
            const minPercent = (minVal / MAX_VALUE) * 100;
            const maxPercent = (maxVal / MAX_VALUE) * 100;

            trackFill.style.left = minPercent + '%';
            trackFill.style.width = (maxPercent - minPercent) + '%';
        }

        // COLLAPSIBLE FILTER TOGGLE
        filterHeader.addEventListener('click', function(event) {
            filterOptionsContent.classList.toggle('show');
            filterHeader.classList.toggle('active');
            
            // Re-run slider calculation when visibility changes to ensure correct layout
            if (filterOptionsContent.classList.contains('show')) {
                 updateRange(null); 
            }
        });

        // Initialize and setup slider listeners
        updateRange(null);
        minRangeInput.addEventListener('input', updateRange);
        maxRangeInput.addEventListener('input', updateRange);
    });
</script>