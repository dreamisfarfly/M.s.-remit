<template>
	
	<view class="user-info">
		<view class="label-info">
			<image v-if="userInfo == null" 
			  class="user-img"
			  src="@/static/images/no-login-img.png"></image>
			<image v-if="userInfo != null"
			  class="user-img"
			  :src="userInfo.buddha"></image>  
			<text class="login-info"
			  v-if="userInfo == null">注册/登录</text>
			<view class="use-info-details" v-if="userInfo != null">
				<view class="user-title">{{userInfo.nickname}}</view>
				<view class="user-id">ID {{userInfo.id}}</view>
			</view>  
		</view>
		<image v-if="userInfo == null" class="right-icon" src="@/static/images/right-icon.png"></image>
	</view>
	
</template>

<script>
	export default {
		data(){
			return{
				userInfo: null,
			}
		},
		mounted(){
			this.initData()
		},
		methods:{
			//加载登录用户信息
			initData(){			
				if(uni.getStorageSync("userInfo") != "")
				{
					this.userInfo = uni.getStorageSync("userInfo")
				}
			}
		}
	}
</script>

<style scoped lang="less">
	.user-info{
		width: 100%;
		margin-top: 8rpx;
		padding: 32rpx 0;
		display: flex;
		align-items: center;
		justify-content: space-between;
		font-family: PingFangSC-Medium, PingFang SC;
		.label-info{
			display: flex;
			align-items: center;
			.user-img{
				width: 104rpx;
				height: 104rpx;
				border-radius: 50% 50%;
			}
			.login-info{
				margin-left: 24rpx;
				font-size: 36rpx;
				font-weight: 550;
				color: #1F2020;
				line-height: 25rpx;
			}
			.use-info-details{
				margin-left: 24rpx;
				.user-title{
					font-size: 36rpx;
					font-weight: 550;
					color: #1F2020;
					line-height: 50rpx;
				}
				.user-id{
					margin-top: 4px;
					font-size: 24rpx;
					font-weight: 400;
					color: #999999;
					line-height: 34rpx;
				}
			}
		}
		.right-icon{
			width: 40rpx;
			height: 40rpx;
		}
	}
</style>
