<template>
	<!-- start 商品操作栏 -->
	<view>
		<view class="action-bar menu-location flex">
			<view class="skip-view center-horizontally">
				<view class="icon-view center-horizontally" @tap="util.jumpTab('/pages/market/recentDeals')">
					<image class="skip-icon" src="@/static/images/home-icon.png"></image>
					<view class="skip-title">首页</view>
				</view>
				<view class="icon-view center-horizontally">
					<image class="skip-icon" src="@/static/images/service-icon.png"></image>
					<view class="skip-title">客服</view>
				</view>
			</view>
			<view class="menu-btn interpose grey-view" v-if="type != 3">分享好友</view>
			<view class="menu-btn interpose black" v-if="type == 0" @click="wantPopup = true">我想要</view>
			<view class="menu-btn interpose black" v-if="type == 1" @click="">缴纳定金</view>
			<view class="menu-btn interpose black" v-if="type == 2" @click="">立即购买</view>
			<view class="menu-btn column interpose grey-view" v-if="type == 3">
				<view class="group-booking-title">¥599.00</view>
				<view class="buy-separately">单独购买</view>
			</view>
			<view class="menu-btn column interpose black" v-if="type == 3"
				@tap="util.jump('/pages/order/confirmOrder?type=submit')">
				<view class="spell-group-title">¥599.00</view>
				<view class="spell-group">发起拼团</view>
			</view>
		</view>
		
		<u-popup v-model="wantPopup" mode="center">
			<view class="want-popup">
				<view class="want-popup-title">
					添加客服微信（<text class="wx">weixinhao</text>），享受更多优惠~
				</view>
				<view class="submit-btn" @click="wantPopup=false">确定</view>
			</view>
		</u-popup>
	</view>
	<!-- end 商品操作栏 -->
</template>

<script>
	export default {
		data() {
			return {
				type: 0,
				wantPopup: false
			}
		}
	}
</script>

<style scoped lang="less">
	.action-bar {
		width: 100%;
		height: 108rpx;
		background: #FFFFFF;
		box-shadow: 0 -4rpx 6rpx 0 rgba(0, 0, 0, 0.03);

		.menu-btn {
			width: 240rpx;
		}

		.skip-view {
			flex: 1;

			.icon-view {
				padding: 0 32rpx;
				flex-flow: column;

				.skip-icon {
					width: 36rpx;
					height: 36rpx;
				}

				.skip-title {
					margin-top: 16rpx;
					font-size: 20rpx;
					color: #444444;
				}
			}
		}

		.grey-view {
			color: #4C4C4C;
			font-weight: 500;
			background: #E4E4E4;
		}

		.black {
			font-weight: 500;
			color: #FFFFFF;
			background: linear-gradient(62deg, #1F2020 0%, #444444 100%);
		}
	}
	
	.want-popup{
		width: 592rpx;
		padding: 40rpx 30rpx;
		.want-popup-title{
			padding: 50rpx 0 110rpx 0;
			font-size: 36rpx;
			color: #1A1A1A;
			text-align: center;
			font-weight: 400;
			line-height: 50rpx;
			.wx{
				color: #6282A2;
			}
		}
		.submit-btn{
			padding: 30rpx 238rpx;
			background: linear-gradient(62deg, #1F2020 0%, #444444 100%);
			border-radius: 4rpx;
			color: #FFFFFF;
		}
	}
	
	.buy-separately{
		font-size: 24rpx;
		font-weight: 400;
		color: #4C4C4C;
	}
	
	.spell-group{
		font-size: 24rpx;
		font-weight: 400;
		color: #FFFFFF;
	}
	
	.group-booking-title{
		font-size: 36rpx;
		font-weight: 500;
		color: #4C4C4C;
	}
</style>
