@include('filterheader')

<style>
.slot-content {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    padding-left: 8%;
}

.el-container.is-vertical {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}

.el-container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    min-width: 0;
}

.plan-info[data-v-f9a0069e] {
    width: 414px;
    height: 100px;
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    margin-top: 10px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-shadow: 2px 2px 15px #d8d8d8;
    box-shadow: 2px 2px 15px #d8d8d8;
}

.plan-item[data-v-f9a0069e] {
    margin-top: 5px;
    margin-bottom: 5px;
    color: #7b8794;
}

.plan-item .value[data-v-f9a0069e] {
    color: #616e7c;
    font-weight: 600;
}

.plan-info .change-plan[data-v-f9a0069e] {
    margin-left: 45px;
}

.el-button--success {
    color: #fff;
    background-color: #6a69ff;
    border-color: #6a69ff;
}

.el-button {
    display: inline-block;
    line-height: 1;
    white-space: nowrap;
    cursor: pointer;
    background: #fff;
    border: 1px solid #e7e9ea;
    border-color: #e7e9ea;
    color: #414c58;
    -webkit-appearance: none;
    text-align: center;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    outline: none;
    margin: 0;
    -webkit-transition: .1s;
    transition: .1s;
    font-weight: 500;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    padding: 12px 20px;
    font-size: 14px;
    border-radius: 4px;
}

.subscriptions-cards[data-v-f9a0069e] {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    margin-bottom: 50px;
}

.subscription-card[data-v-6c79bc03] {
    width: 325px;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    -webkit-box-shadow: 2px 2px 15px #d8d8d8;
    box-shadow: 2px 2px 15px #d8d8d8;
    border-radius: 12px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding: 30px;
    margin-right: 45px;
    margin-top: 45px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: space-evenly;
    -ms-flex-pack: space-evenly;
    justify-content: space-evenly;
}

.subscription-card .card-main-title[data-v-6c79bc03] {
    font-size: 16px;
    color: #616e7c;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.subscription-card .card-item[data-v-6c79bc03] {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    height: 20%;
}

.subscription-card .card-title[data-v-6c79bc03] {
    color: #616e7c;
    font-size: 15px;
}

.subscription-card .card-text[data-v-6c79bc03] {
    margin-top: 10px;
    color: #7b8794;
    font-size: 14px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.el-progress {
    position: relative;
    line-height: 1;
}

.el-progress--without-text .el-progress-bar {
    padding-right: 0;
    margin-right: 0;
    display: block;
}

.el-progress-bar__outer {
    height: 6px;
    border-radius: 100px;
    background-color: #ebeef5;
    overflow: hidden;
    position: relative;
    vertical-align: middle;
}

.el-progress-bar__inner {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    background-color: #6a69ff;
    text-align: right;
    border-radius: 100px;
    line-height: 1;
    white-space: nowrap;
    -webkit-transition: width .6s ease;
    transition: width .6s ease;
}

.el-progress-bar__inner:after {
    display: inline-block;
    content: "";
    height: 100%;
    vertical-align: middle;
}

.content-wrapper {
    margin-top: 60px;
    padding-top: 100px;
    padding-left: 150px;
}

.el-button--success {
    color: #fff;
    background-color: #6a69ff;
    border-color: #6a69ff;
}

.subscription-card .card-item[data-v-6c79bc03] {
    margin-top: 30px;
}

.main-content {
    display: flex;
}

.sidebar {
    display: inline-grid;
    width: 200px;
    padding-top: 10px;
}

.sidebar .sidebar-container {
    display: inline-block;
}

.sidebar .sidebar-container .sidebar-list {
    list-style: none;
}

.sidebar .sidebar-container .sidebar-list .sidebar-item {
    padding-bottom: 16px;
}

.sidebar .sidebar-container .sidebar-list .last-item {
    padding: 0;
}

.sidebar .sidebar-container .sidebar-list .sidebar-item .nuxt-link-exact-active {
    color: #55aad4 !important;
    font-weight: 600;
}

.sidebar .sidebar-container .sidebar-list .sidebar-item .item-link {
    color: #7b8794;
    font-style: normal;
    font-size: 16px;
    line-height: 20px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-transform: capitalize;
}

a {
    text-decoration: none;
}

h1.title {
    font-weight: 400;
    color: #616e7c;
    font-size: 24px;
    padding-top: 40px;
    margin-bottom: 40px;
}
</style>

<link rel="stylesheet" href="{{ asset('new-assets/css/invoices.css')}}">
<div class="content-wrapper">
    <h1 class="title">Subscriptions &amp; Billing</h1>
    <div class="main-content">
        <div class="sidebar">
            <div class="sidebar-container">
                <ul class="sidebar-list">
                    <li class="sidebar-item">
                        <a href="/tool/account-billing" aria-current="page" class="item-link ">
                            Subscriptions
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/invoices" class="item-link">
                            Invoices
                        </a>
                    </li>
                    <li class="sidebar-item last-item">
                        <a href="/payment-method" class="item-link nuxt-link-exact-active nuxt-link-active selected">
                            Payment Method
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slot-content">
            <section data-v-f9a0069e="" class="el-container is-vertical" element-loading-text="Loading"
                style="margin-top: -180px">
                <div class="db-CardlessUIPageWrapper Box-root Padding-horizontal--20" style="overflow-x: auto;">
                    <div class="Box-root">
                        <div class="Card-root Card--radius--all Section Box-root Box-background--white"
                            style="overflow: visible;">
                            <div class="ListView ListView--withFooter">
                                <div
                                    class="Box-root Padding-top--16 Padding-bottom--8 Flex-flex Flex-alignItems--center Flex-justifyContent--spaceBetween">
                                    <span
                                        class="Text-color--dark Text-fontSize--28 Text-fontWeight--bold Text-lineHeight--32 Text-numericSpacing--proportional Text-typeface--base Text-wrap--wrap Text-display--inline"><span>Payment
                                            Method</span></span>
                                    <div class="Box-root" style="pointer-events: none;">
                                        <div class="Box-root Flex-flex Flex-direction--row Flex-justifyContent--flexStart Flex-wrap--nowrap"
                                            style="margin-left: -8px; margin-top: -8px;">
                                            <div class="Box-root Box-hideIfEmpty Margin-top--8 Margin-left--8"
                                                style="pointer-events: auto;">
                                                <div class="Box-root Flex-flex">
                                                    <div class="Box-root Flex-flex">
                                                        <div class="PressableCore PressableCore--cursor--pointer PressableCore--height--medium PressableCore--radius--all PressableCore--width PressableCore--width--auto PressableButton Button Button--color--white Box-root Flex-inlineFlex"
                                                            style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, rgba(60, 66, 87, 0.16) 0px 0px 0px 1px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;">
                                                            <div class="PressableCore-base Box-root"><button
                                                                    aria-controls="menu386" aria-haspopup="menu"
                                                                    id="menu386-button"
                                                                    class="UnstyledLink Button-element PressableContext Padding-horizontal--8 Padding-vertical--4 PressableContext--cursor--pointer PressableContext--display--inlineFlex PressableContext--fontLineHeight--20 PressableContext--fontSize--14 PressableContext--fontWeight--medium PressableContext--height PressableContext--height--medium PressableContext--radius--all PressableContext--width PressableContext--width--auto"
                                                                    type="button" style="color: rgb(60, 66, 87);">
                                                                    <div class="Button-align Box-root Flex-flex Flex-alignItems--baseline Flex-direction--row"
                                                                        style="position: relative;">
                                                                        <div class="TextAligner Box-root"
                                                                            style="line-height: 20px; font-size: 14px; flex: 0 0 auto;">
                                                                        </div>
                                                                        <div class="Box-root Flex-flex Flex-alignItems--baseline Flex-direction--row Flex-justifyContent--center"
                                                                            style="width: 100%; line-height: 0; flex: 1 1 auto;">
                                                                            <div class="Box-root Padding-right--8">
                                                                                <div aria-hidden="true"
                                                                                    class="SVGInline SVGInline--cleaned SVG Icon Icon--filter Button-icon Icon-color Icon-color--gray600 Box-root Flex-flex"
                                                                                    style="transform: translateY(1.1px);">
                                                                                    <svg aria-hidden="true"
                                                                                        class="SVGInline-svg SVGInline--cleaned-svg SVG-svg Icon-svg Icon--filter-svg Button-icon-svg Icon-color-svg Icon-color--gray600-svg"
                                                                                        height="12" width="12"
                                                                                        viewBox="0 0 16 16"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M13.994.004c.555 0 1.006.448 1.006 1a.997.997 0 0 1-.212.614l-5.782 7.39L9 13.726a1 1 0 0 1-.293.708L7.171 15.97A.1.1 0 0 1 7 15.9V9.008l-5.788-7.39A.996.996 0 0 1 1.389.214a1.01 1.01 0 0 1 .617-.21z"
                                                                                            fill-rule="evenodd"></path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div><span
                                                                                class="Button-label Text-color--default Text-fontSize--14 Text-fontWeight--medium Text-lineHeight--20 Text-numericSpacing--proportional Text-typeface--base Text-wrap--noWrap Text-display--block"
                                                                                style="margin-top: -1px;"><span>Filter</span></span>
                                                                        </div>
                                                                    </div>
                                                                </button></div>
                                                            <div
                                                                class="PressableCore-overlay PressableCore-overlay--extendBy1 Box-root Box-background--white">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Box-root Box-hideIfEmpty Margin-top--8 Margin-left--8"
                                                style="pointer-events: auto;">
                                                <div>
                                                    <div class="PressableCore PressableCore--cursor--pointer PressableCore--height--medium PressableCore--radius--all PressableCore--width PressableCore--width--auto PressableButton Button Button--color--white Box-root Flex-inlineFlex"
                                                        style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, rgba(60, 66, 87, 0.16) 0px 0px 0px 1px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;">
                                                        <div class="PressableCore-base Box-root"><button
                                                                data-db-analytics-name="list_views.header.export.filter"
                                                                class="UnstyledLink Button-element PressableContext Padding-horizontal--8 Padding-vertical--4 PressableContext--cursor--pointer PressableContext--display--inlineFlex PressableContext--fontLineHeight--20 PressableContext--fontSize--14 PressableContext--fontWeight--medium PressableContext--height PressableContext--height--medium PressableContext--radius--all PressableContext--width PressableContext--width--auto"
                                                                type="button" style="color: rgb(60, 66, 87);">
                                                                <div class="Button-align Box-root Flex-flex Flex-alignItems--baseline Flex-direction--row"
                                                                    style="position: relative;">
                                                                    <div class="TextAligner Box-root"
                                                                        style="line-height: 20px; font-size: 14px; flex: 0 0 auto;">
                                                                    </div>
                                                                    <div class="Box-root Flex-flex Flex-alignItems--baseline Flex-direction--row Flex-justifyContent--center"
                                                                        style="width: 100%; line-height: 0; flex: 1 1 auto;">
                                                                        <div class="Box-root Padding-right--8">
                                                                            <div aria-hidden="true"
                                                                                class="SVGInline SVGInline--cleaned SVG Icon Icon--arrowExport Button-icon Icon-color Icon-color--gray600 Box-root Flex-flex"
                                                                                style="transform: translateY(1.1px);">
                                                                                <svg aria-hidden="true"
                                                                                    class="SVGInline-svg SVGInline--cleaned-svg SVG-svg Icon-svg Icon--arrowExport-svg Button-icon-svg Icon-color-svg Icon-color--gray600-svg"
                                                                                    height="12" width="12"
                                                                                    viewBox="0 0 16 16"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M15 10.006a1 1 0 1 1-2 0v-5.6L2.393 15.009a.992.992 0 1 1-1.403-1.404L11.595 3.002h-5.6a1 1 0 0 1 0-2.001h8.02a1 1 0 0 1 .284.045.99.99 0 0 1 .701.951z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg>
                                                                            </div>
                                                                        </div><span
                                                                            class="Button-label Text-color--default Text-fontSize--14 Text-fontWeight--medium Text-lineHeight--20 Text-numericSpacing--proportional Text-typeface--base Text-wrap--noWrap Text-display--block"
                                                                            style="margin-top: -1px;"><span>Export</span></span>
                                                                    </div>
                                                                </div>
                                                            </button></div>
                                                        <div
                                                            class="PressableCore-overlay PressableCore-overlay--extendBy1 Box-root Box-background--white">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="Table">
                                    <thead class="Table-head">
                                        <tr class="Table-row ListViewItem ListViewItem-header">
                                            <td id="amount"
                                                class="Table-cell Table-cell--align--left Table-cell--verticalAlign--top Table-cell--width--minimized Table-cell--wrap--noWrap ListViewItem-cell"
                                                style="height: 1px;">
                                                <div class="ListViewItem-cellContent Box-root Padding-all--8"><span
                                                        class="ListViewItem-text Text-color--dark  Text-fontSize--13 Text-fontWeight--medium Text-lineHeight--20 Text-numericSpacing--proportional Text-typeface--upper Text-wrap--wrap Text-display--block"><span>Email</span></span>
                                                </div>
                                            </td>
                                            <td id="currency"
                                                class="Table-cell Table-cell--align--left Table-cell--verticalAlign--top Table-cell--width--minimized Table-cell--wrap--noWrap ListViewItem-cell"
                                                style="height: 1px;">
                                                <div class="ListViewItem-cellContent Box-root Padding-all--8"><span
                                                        class="ListViewItem-text Text-color--dark Text-fontSize--13 Text-fontWeight--medium Text-lineHeight--20 Text-numericSpacing--proportional Text-typeface--upper Text-wrap--wrap Text-display--inline"><span>Description</span></span>
                                                </div>
                                            </td>
                                            <td id="badge"
                                                class="Table-cell Table-cell--align--left Table-cell--verticalAlign--top Table-cell--width--minimized Table-cell--wrap--noWrap ListViewItem-cell"
                                                style="height: 1px;">
                                                <div class="ListViewItem-cellContent Box-root Padding-all--8"><span
                                                        class="ListViewItem-text Text-color--dark Text-fontSize--13 Text-fontWeight--medium Text-lineHeight--20 Text-numericSpacing--proportional Text-typeface--upper Text-wrap--wrap Text-display--inline"><span>Default
                                                            Source</span></span>
                                                </div>
                                            </td>
                                            <td id="number"
                                                class="Table-cell Table-cell--align--left Table-cell--verticalAlign--top Table-cell--width--minimized Table-cell--wrap--noWrap ListViewItem-cell"
                                                style="height: 1px;">
                                                <div class="ListViewItem-cellContent Box-root Padding-all--8"><span
                                                        class="ListViewItem-text Text-color--dark Text-fontSize--13 Text-fontWeight--medium Text-lineHeight--20 Text-numericSpacing--proportional Text-typeface--upper Text-wrap--wrap Text-display--inline"><span>Created
                                                            number</span></span></div>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody class="Table-body" id="invoiceTable">
                                        @foreach ($customers as $customer)
                                        <tr
                                            class="Table-row ListViewItem bs-ActionsParent BadgeParent IconParent ListViewItem--hasLink">
                                            <td class="Table-cell Table-cell--align--left Table-cell--verticalAlign--top Table-cell--width--minimized Table-cell--wrap--noWrap ListViewItem-cell"
                                                style="height: 1px; min-width: 300px;"><a
                                                    class="UnstyledLink ListViewItem-link"
                                                    href="/test/customers/cus_IU8eXPSmwEX4ux">
                                                    <div class="ListViewItem-cellContent Box-root Padding-all--8"><span
                                                            class="ListViewItem-text Text-color--dark Text-fontSize--14 Text-fontWeight--medium Text-lineHeight--20 Text-numericSpacing--proportional Text-typeface--base Text-wrap--wrap Text-display--inline">{{$customer->email}}</span>
                                                    </div>
                                                </a></td>
                                            <td aria-hidden="true"
                                                class="Table-cell Table-cell--align--left Table-cell--verticalAlign--top Table-cell--width--maximized Table-cell--wrap--wrap ListViewItem-cell ListViewItem-cell--breakWord"
                                                style="height: 1px;"><a class="UnstyledLink ListViewItem-link"
                                                    href="/test/customers/cus_IU8eXPSmwEX4ux">
                                                    <div class="ListViewItem-cellContent Box-root Padding-all--8"><span
                                                            class="ListViewItem-text Text-color--disabled Text-fontSize--14 Text-fontWeight--regular Text-lineHeight--20 Text-numericSpacing--proportional Text-typeface--base Text-wrap--wrap Text-display--inline">{{$customer->descriptipn?$customer->description:'---'}}</span>
                                                    </div>
                                                </a></td>
                                            <td class="Table-cell Table-cell--align--left Table-cell--verticalAlign--top Table-cell--width--minimized Table-cell--wrap--noWrap ListViewItem-cell"
                                                style="height: 1px; min-width: 145px;"><a
                                                    class="UnstyledLink ListViewItem-link"
                                                    href="/test/customers/cus_IU8eXPSmwEX4ux">
                                                    <div class="ListViewItem-cellContent Box-root Padding-all--8"><span
                                                            class="ListViewItem-text Text-color--default Text-fontSize--14 Text-fontWeight--regular Text-lineHeight--20 Text-numericSpacing--proportional Text-typeface--base Text-wrap--wrap Text-display--inline">
                                                            <div class="Box-root" style="pointer-events: none;">
                                                                <div class="Box-root Flex-flex Flex-direction--row Flex-justifyContent--flexStart Flex-wrap--nowrap"
                                                                    style="margin-left: -12px; margin-top: -12px;">
                                                                    <div class="Box-root Box-hideIfEmpty Margin-top--12 Margin-left--12"
                                                                        style="pointer-events: auto;">
                                                                        <div
                                                                            class="SVGInline SVGInline--cleaned SVG BrandIcon BrandIcon--size--20 Box-root Flex-flex">
                                                                            @if($customer->sources->data[0]->brand == 'Visa')
                                                                            <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg"
                                                                                height="20" width="20"
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g fill="none" fill-rule="evenodd">
                                                                                    <path d="M0 0h32v32H0z"
                                                                                        fill="#00579f"></path>
                                                                                    <g fill="#fff" fill-rule="nonzero">
                                                                                        <path
                                                                                            d="M13.823 19.876H11.8l1.265-7.736h2.023zm7.334-7.546a5.036 5.036 0 0 0-1.814-.33c-1.998 0-3.405 1.053-3.414 2.56-.016 1.11 1.007 1.728 1.773 2.098.783.379 1.05.626 1.05.963-.009.518-.633.757-1.216.757-.808 0-1.24-.123-1.898-.411l-.267-.124-.283 1.737c.475.213 1.349.403 2.257.411 2.123 0 3.505-1.037 3.521-2.641.008-.881-.532-1.556-1.698-2.107-.708-.354-1.141-.593-1.141-.955.008-.33.366-.667 1.165-.667a3.471 3.471 0 0 1 1.507.297l.183.082zm2.69 4.806l.807-2.165c-.008.017.167-.452.266-.74l.142.666s.383 1.852.466 2.239h-1.682zm2.497-4.996h-1.565c-.483 0-.85.14-1.058.642l-3.005 7.094h2.123l.425-1.16h2.597c.059.271.242 1.16.242 1.16h1.873zm-16.234 0l-1.982 5.275-.216-1.07c-.366-1.234-1.515-2.575-2.797-3.242l1.815 6.765h2.14l3.18-7.728z">
                                                                                        </path>
                                                                                        <path
                                                                                            d="M6.289 12.14H3.033L3 12.297c2.54.641 4.221 2.189 4.912 4.049l-.708-3.556c-.116-.494-.474-.633-.915-.65z">
                                                                                        </path>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                            @endif
                                                                            @if($customer->sources->data[0]->brand == 'MasterCard')
                                                                            <svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--20-svg"
                                                                                height="20" width="20"
                                                                                viewBox="0 0 32 32"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g fill="none" fill-rule="evenodd">
                                                                                    <path d="M0 0h32v32H0z" fill="#000">
                                                                                    </path>
                                                                                    <g fill-rule="nonzero">
                                                                                        <path
                                                                                            d="M13.02 10.505h5.923v10.857H13.02z"
                                                                                            fill="#ff5f00"></path>
                                                                                        <path
                                                                                            d="M13.396 15.935a6.944 6.944 0 0 1 2.585-5.43c-2.775-2.224-6.76-1.9-9.156.745s-2.395 6.723 0 9.368 6.38 2.969 9.156.744a6.944 6.944 0 0 1-2.585-5.427z"
                                                                                            fill="#eb001b"></path>
                                                                                        <path
                                                                                            d="M26.934 15.935c0 2.643-1.48 5.054-3.81 6.21s-5.105.851-7.143-.783a6.955 6.955 0 0 0 2.587-5.428c0-2.118-.954-4.12-2.587-5.429 2.038-1.633 4.81-1.937 7.142-.782s3.811 3.566 3.811 6.21z"
                                                                                            fill="#f79e1b"></path>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="Box-root Box-hideIfEmpty Margin-top--12 Margin-left--12"
                                                                        style="pointer-events: auto;"><span
                                                                            class="Text-color--default Text-fontSize--14 Text-fontWeight--regular Text-lineHeight--20 Text-numericSpacing--proportional Text-typeface--base Text-wrap--noWrap Text-display--inline">????????????
                                                                            {{$customer->sources->data[0]->last4}}</span></div>
                                                                </div>
                                                            </div>
                                                        </span></div>
                                                </a></td>
                                            <td model="[object Object]"
                                                class="Table-cell Table-cell--align--left Table-cell--verticalAlign--top Table-cell--width--auto Table-cell--wrap--noWrap ListViewItem-cell"
                                                style="height: 1px; min-width: 150px;"><a
                                                    class="UnstyledLink ListViewItem-link"
                                                    href="/test/customers/cus_IU8eXPSmwEX4ux">
                                                    <div class="ListViewItem-cellContent Box-root Padding-all--8"><span
                                                            class="ListViewItem-text Text-color--default Text-fontSize--14 Text-fontWeight--regular Text-lineHeight--20 Text-numericSpacing--proportional Text-typeface--base Text-wrap--wrap Text-display--inline"><span>{{date("Y-m-d H:i:s", $customer->created)}}</span></span>
                                                    </div>
                                                </a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div
                                    class="Box-root Padding-horizontal--0 Padding-vertical--16 Flex-flex Flex-alignItems--center Flex-justifyContent--spaceBetween">
                                    <div><span
                                            class="Text-color--default Text-fontSize--14 Text-fontWeight--regular Text-lineHeight--20 Text-numericSpacing--proportional Text-typeface--base Text-wrap--wrap Text-display--inline"><span><span>About
                                                    <strong id="invoiceCount">{{$count}}</strong>
                                                    results</span></span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>