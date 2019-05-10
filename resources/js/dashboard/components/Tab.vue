<template>
    <div class="tab-content">
        <ul class="nav nav-tabs" role="tablist">
            <li
                    class="nav-item"
                    v-for="tab in tabs"
                    :key="tab"
                    @click="switchTab(tab);">
                <a class="nav-link text-dark"
                   :class="{ 'active': activeTab === tab }"
                   data-toggle="tab"
                   role="tab">
                    <slot :name="tabHeadSlotName(tab)">{{ tab }}</slot>
                </a>
            </li>
        </ul>
        <main class="card-body">
            <div class="tab-panel">
                <slot :name="tabPanelSlotName"></slot>
            </div>
        </main>
    </div>

</template>

<script>


    export default {
        name: 'Tab',
        props: {
            initialTab: String,
            tabs: Array,
        },
        data() {
            return {
                activeTab: this.initialTab
            };
        },
        computed: {
            tabPanelSlotName() {
                return `tab-panel-${this.activeTab}`;
            }
        },
        methods: {
            tabHeadSlotName(tabName) {
                return `tab-head-${tabName}`;
            },

            switchTab(tabName) {
                this.activeTab = tabName;
            }
        }
    };
</script>