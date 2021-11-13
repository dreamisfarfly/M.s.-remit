<template>
	<!-- start 我的 -->
	<view class="page-general-padding">
		<!-- start 用户信息 -->
		<userInfo></userInfo>
		<!-- end 用户信息 -->
		<!-- start 订单状态信息 -->
		<userOrderStatus></userOrderStatus>
		<!-- end 订单状态信息 -->
		<!-- start 菜单 -->
		<menus></menus>
		<!-- end 菜单 -->
	</view>
	<!-- end 我的 -->
</template>

<script>
	import userInfo from './components/userInfo.vue'
	import userOrderStatus from './components/userOrderStatus.vue'
	import menus from './components/menu.vue'
	export default {
		components:{
			userInfo,
			userOrderStatus,
			menus
		},
		data() {
			return {
				
			}
		},
		methods: {
			
		}
	}
</script>

<style scoped lang="less">

</style>
