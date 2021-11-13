<template>
	<!-- start 选择地址信息 -->
	<view class="select-address">
		<view class="select-address-list both-sides-align center-horizontally">
			<view class="address-info center-horizontally ">
				<image class="icon-img" src="@/static/images/address-user-icon.png"></image>
				<text class="info-mar consignee">收货人：李先生</text>
			</view>
			<text class="phone">17508145863</text>
		</view>
		<view class="separator"></view>
		<view class="select-address-list both-sides-align center-horizontally">
			<view class="address-info center-horizontally ">
				<image class="icon-img" src="@/static/images/address-icon.png"></image>
				<text class="info-mar address">收货地址：湖南省长沙市岳麓区枫林校区3栋</text>
			</view>
			<image 
			class="jump-icon" src="@/static/images/right-icon.png" 
			@tap="util.jump('/pages/order/shippingAddress')"></image>
		</view>
	</view>
	<!-- end 选择地址信息 -->
</template>

<script>
</script>

<style scoped lang="less">
	.select-address{
		padding: 0 30rpx;
		background-color: #FFFFFF;
		.select-address-list{
			padding: 20rpx 0;
		}
	}
	
	.icon-img{
		width: 40rpx;
		height: 40rpx;
	}
	
	.info-mar{
		margin-left: 20rpx;
	}
	
	.consignee{
		font-size: 32rpx;
		font-weight: 500;
		color: #222222;
	}
	
	.phone{
		font-size: 32rpx;
		font-weight: 500;
		color: #222222;
	}
	
	.address{
		font-size: 28rpx;
		color: #222222;
		font-weight: 400;
	}
	
	.jump-icon{
		width: 32rpx;
		height: 32rpx;
	}
</style>
