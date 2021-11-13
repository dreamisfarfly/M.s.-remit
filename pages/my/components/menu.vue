<template>
	<!-- start 菜单 -->
	<view class="menu">
		<view class="menu-list"
		 v-for="(item,key) in menuList" 
		 :key="key" @tap="util.jump(item.url)">
			<view class="menu-info">
				<image class="menu-icon" :src="item.icon"></image>
				<text class="menu-title">{{item.name}}</text>
			</view>
			<image class="skip-page" src="@/static/images/right-icon.png"></image>
		</view>
	</view>
	<!-- end 菜单 -->
</template>

<script>
	export default {
		data() {
			return {
				menuList:[
					{
						icon: require("@/static/images/feedback-icon.png"),
						name: '帮助反馈',
						url: '/pages/my/helpFeedback'
					},
					{
						icon: require("@/static/images/user-icon.png"),
						name: '联系客服',
					}
				]
			}
		},
		methods:{

		}
	}
</script>

<style scoped lang="less">
	.menu{
		font-family: PingFangSC-Medium, PingFang SC;
		width: 100%;
		.menu-list{
			padding-top: 60rpx;
			padding-bottom: 38rpx;
			border-bottom: 2rpx solid #F4F4F4;
			display: flex;
			justify-content: space-between;
			.menu-info{
				display: flex;
				align-items: center;
				.menu-icon{
					width: 40rpx;
					height: 40rpx;
				}
				.menu-title{
					margin-left: 20rpx;
					font-size: 32rpx;
					font-weight: 550;
					color: #1A1A1A;
				}
			}
			.skip-page{
				width: 40rpx;
				height: 40rpx;
			}
		}
	}
</style>
