<template>
	<!-- start 收货地址 -->
	<view class="shipping-address">
		<!-- start 地址列表 -->
		<view class="u-m-b-140">
			<view class="shipping-address-card both-sides-align" v-for="(item,key) in addressList" :key="key"
				@click="selectAddress()">
				<view class="address-info flex">
					<image class="address-icon" src="@/static/images/address-icon.png"></image>
					<view class="u-m-l-10">
						<view class="user flex">
							{{item.name}} {{item.phone}}
							<view class="default" v-if="item.status == 1">默认</view>
						</view>
						<view class="address">
							{{item.province}}{{item.city}}{{item.district}}{{item.detailedAddress}}
						</view>
					</view>
				</view>
				<image class="compile-icon" src="@/static/images/compile.png"
					@tap.stop="util.jump('/pages/order/editAddress?id='+item.id)"></image>
			</view>
		</view>
		<!-- end 地址列表 -->
		<!-- start 新增收货地址 -->
		<view class="add-shipping-address menu-location interpose" @tap="util.jump('/pages/order/editAddress')">
			<image class="add-icon" src="@/static/images/white-add-icon.png.png"></image>
			<text class="add-font">新增收货地址</text>
		</view>
		<!-- start 新增收货地址 -->
	</view>
	<!-- end 收货地址 -->
</template>

<script>
	export default {
		data() {
			return {
				addressList: [{
						id: 1,
						name: '李先生',
						phone: '18774586970',
						status: 0,
						province: '湖南省',
						city: '长沙市',
						district: '岳麓区',
						detailedAddress: '枫林小区3栋'
					},
					{
						id: 2,
						name: '李先生',
						phone: '18774586970',
						status: 1,
						province: '湖南省',
						city: '长沙市',
						district: '岳麓区',
						detailedAddress: '枫林小区3栋'
					},
				]
			}
		},
		methods: {
			selectAddress() {
				uni.navigateBack({ //返回
					delta: 1
				})
			}
		}
	}
</script>

<style scoped lang="less">
	.shipping-address-card {
		padding: 50rpx 26rpx;
		background-color: #FFFFFF;
		align-items: center;
		box-shadow: 0 -2rpx 0 0 #E4E4E4;

		.address-info {
			.address-icon {
				width: 40rpx;
				height: 40rpx;
			}


			.user {
				font-size: 30rpx;
				font-weight: 550;

				.default {
					margin-left: 30rpx;
					padding: 2rpx 10rpx;
					font-size: 24rpx;
					color: #E88104;
					background: rgba(232, 129, 4, 0.1);
					border-radius: 8rpx;
				}
			}

			.address {
				margin-top: 14rpx;
				font-size: 24rpx;
				color: #999999;
			}

		}

		.compile-icon {
			width: 36rpx;
			height: 36rpx;
		}
	}

	.add-shipping-address {
		width: 100%;
		height: 100rpx;
		background: linear-gradient(62deg, #1F2020 0%, #444444 100%);

		.add-icon {
			width: 36rpx;
			height: 36rpx;
		}

		.add-font {
			margin-left: 16rpx;
			font-size: 30rpx;
			font-weight: 500;
			color: #FFFFFF;
		}
	}
</style>
