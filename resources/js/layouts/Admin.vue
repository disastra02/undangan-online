<template>
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<Sidebar />
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<Header />
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<router-view></router-view>
					</div>
					<!--end::Content-->
					<Footer />
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
    <!--end::Root-->
    <Global/>
    <!--end::Main-->
</template>

<script setup>
    import Sidebar from './Sidebar.vue';
    import Header from './Header.vue';
    import Footer from './Footer.vue';
    import Global from './Global.vue';
</script>