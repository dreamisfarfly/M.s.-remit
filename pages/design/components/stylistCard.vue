<template>
	<view class="stylist-card"><!-- @tap="tapUrl()" -->
		<image class="head-portrait" src="@/static/logo.png"></image>
		<view class="architect-info">
			<view class="info-lable">
				<text class="architect-title">下午的冰淇淋</text>
				<view class="working-seniority" v-if="type=='list' || type=='personage'">从业15年</view>
			</view>
			<view class="architect-info-describe" v-if="type=='card'">
				从业经验：15年
			</view>	
			<view class="architect-info-describe">
				收费标准：
				<text class="font-area">200-250元/㎡</text>
			</view>
			<view class="architect-info-describe" v-if="type=='list' || type=='personage'">
				擅长风格：现代简约、新中式、北欧
			</view>
		</view>
	</view>
</template>

<script>
	export default {
		name:"stylistCard",
		props:{
			type: {
				type: String,
				default: ''
			}
		},
		data() {
			return {		
	
			};
		},
		methods:{
			//跳转
			tapUrl(){
				if(this.type != 'personage')
				{
					this.util.jump('/pages/design/designDetails')
				}
			}
		}
	}
</script>

<style scoped lang="less">
	.stylist-card{
		width: 100%;
		background-color: #FFFFFF;
		border-radius: 10rpx;
		padding: 30rpx 30rpx;
		box-sizing: border-box;
		display: inline-flex;
		white-space: normal;
		.head-portrait{
			flex-shrink:0;
			width: 140rpx;
			height: 140rpx;
			border-radius: 50% 50%;
		}
		.architect-info{
			flex: 1;
			margin-left: 30rpx;
			font-size: 28rpx;
			line-height: 40rpx;
			.info-lable{
				display: flex;
				justify-content: space-between;
				.architect-title{
					font-family: PingFangSC-Semibold, PingFang SC;
					font-weight: 600;
					color: #1A1A1A;
				}
				.working-seniority{
					padding: 0 16rpx;
					background: rgba(0, 0, 0, 0.03);
					border: 2rpx solid rgba(26, 26, 26, 0.5);
					opacity: 0.94;
					border-radius: 4rpx;
					font-family: PingFangSC-Regular, PingFang SC;
					font-size: 22rpx;
				}
			}
			.architect-info-describe{
				margin-top: 10rpx;
				font-family: PingFangSC-Regular, PingFang SC;
				color: #4C4C4C;
				font-weight: 400;
			}
			.font-area{
				color: #ED3632;
			}
		}
	}
</style>
