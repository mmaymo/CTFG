<!-- <div class="main-search-box no-shadow margin-bottom-30" style="border-bottom: 2px dotted #ccc;">
    <form method="GET">
        <div class="row with-forms margin-bottom-30">
            <input type="hidden" name="q" value="{{ @$query }}">
            <div class="col-md-6">
                <label for="filter-tags-input" class="visually-hidden">Tags</label>
                <select id="filter-tags-input" name="tags[]" data-placeholder="All Tags" class="chosen-select-no-single" multiple style="display: none;">
                    @foreach($allTags as $tag)
                        <option value="{{ $tag->name }}"
                            <?php
                                if (is_array($filterTags) && @in_array($tag->name, @$filterTags)) {
                                    echo "selected";
                                }
                            ?>
                            >{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="filter-categories-input" class="visually-hidden">Categories</label>
                <select id="filter-categories-input" name="categories[]" data-placeholder="All Categories" class="chosen-select-no-single" multiple style="display: none;">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->name }}"
                            <?php
                                if (is_array($filterCategories) && @in_array($cat->name, @$filterCategories)) {
                                    echo "selected";
                                }
                            ?>
                            >{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="filter-countries-input" class="visually-hidden">Countries</label>
                <select id="filter-countries-input" name="countries[]" data-placeholder="All Countries" id="countries" class="chosen-select-no-single" multiple style="display: none;">
                    @foreach($allCountries as $country)
                        <option value="{{ $country->country }}"
                            <?php
                                if (is_array($filterCountries) && @in_array($country->country, @$filterCountries)) {
                                    echo "selected";
                                }
                            ?>
                            >{{ $country->country }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label for="filter-open-source-input" class="visually-hidden">Open Source</label>
                <select id="filter-open-source-input" name="opensource[]" data-placeholder="Open source" class="chosen-select-no-single" multiple style="display: none;">
                    <?php
                        $opensourceArray = array("Yes", "No", "Partially");
                    ?>
                    @foreach($opensourceArray as $ops)
                        <option value="{{ $ops }}"
                            <?php
                                if (is_array($filterOpenSource) && @in_array($ops, @$filterOpenSource)) {
                                    echo "selected";
                                }
                            ?>
                            >{{ $ops }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label for="filter-project-type-input" class="visually-hidden">Project Type</label>
                <select id="filter-project-type-input" name="types[]" data-placeholder="Project type" class="chosen-select-no-single" multiple style="display: none;">
                    @foreach($listingTypes as $type)
                        <option value="{{ $type }}"
                            <?php
                                if (is_array($filterTypes) && @in_array($type, @$filterTypes)) {
                                    echo "selected";
                                }
                            ?>
                            >{{ $type }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label for="filter-organization-type-input" class="visually-hidden">Organization Type</label>
                <select id="filter-organization-type-input" name="organizationtypes[]" data-placeholder="Organization type" class="chosen-select-no-single" multiple style="display: none;">
                    @foreach($organizationTypes as $orgType)
                        <option value="{{ $orgType }}"
                            <?php
                                if (is_array($filterOrgTypes) && @in_array($orgType, @$filterOrgTypes)) {
                                    echo "selected";
                                }
                            ?>
                            >{{ $orgType }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <div class="checkboxes in-row">
                    <input id="check-2" type="checkbox" name="status" value="Active"
                        <?php
                            if (@$filterStatus == "Active") {
                                echo "checked";
                            }
                        ?>
                    >
                    <label for="check-2">Show active projects only</label>
                </div>
            </div>

            <div class="col-md-2" style="text-align: right;">
                <button class="button" id="filter">Filter</button>
            </div>
        </div>
    </form>
</div> -->
