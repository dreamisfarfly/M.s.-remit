<template>
	<!-- start 编辑地址信息 -->
	<view class="edit-address">
		<!-- start 表单 -->
		<view class="from-view">
			<view class="form-list">
				<view class="from-info flex">
					<view class="form-label">收货人</view>
					<input class="form-input" placeholder="收货人姓名" />
				</view>
			</view>
			<view class="form-list shadow">
				<view class="from-info flex">
					<view class="form-label">手机号码</view>
					<input class="form-input" placeholder="收货人手机号" />
				</view>
			</view>
			<view class="form-list shadow both-sides-align">
				<view class="from-info flex both-sides-align">
					<view class="form-label">所在地区</view>
					<input class="form-input" v-model="regionName" placeholder="选择省/市/区" disabled="true"/>
				</view>
				<pick-regions :defaultRegion="defaultRegion" @getRegion="handleGetRegion">
					<image class="right-icon" src="@/static/images/grey-right-icon.png"></image>
				</pick-regions>
			</view>
			<view class="form-list shadow">
				<view class="from-info flex">
					<view class="form-label">详细地址</view>
					<input class="form-input" placeholder="请填写详细地址" />
				</view>
			</view>
			<view class="form-list shadow">
				<view class="from-info flex">
					<view class="form-label">门牌号</view>
					<input class="form-input" placeholder="街道、门牌号等" />
				</view>
			</view>
		</view>
		<view class="form-default both-sides-align">
			<text>设为默认收货地址</text>
			<u-switch v-model="isDefault" size="30" active-color="#FFFFFF"></u-switch>
		</view>
		<!-- end 表单 -->
		<view class="menu-location interpose save" v-if="id == null">保存并使用</view>
		<view class="menu-location edit flex"  v-if="id != null">
			<view class="delete-address interpose">删除收货地址</view>
			<view class="save-address interpose">保存并使用</view>
		</view>
	</view>
	<!-- start 编辑地址信息 -->
</template>

<script>
	export default {
		data() {
			return {
				id: null,
				isDefault: false,
				defaultRegion: [],
			}
		},
		computed:{
		    regionName(){
		        // 转为字符串
				return this.defaultRegion.map(item=>item).join(' ')
		    }
		},
		onLoad(options) {
			if(options.id != null){
				this.id = options.id
			}
		},
		methods: {
			// 获取选择的地区
			handleGetRegion(region){
				let address = [];
				region.forEach((item,key)=>{
					address.push(item.name);
				});
			    this.defaultRegion = address
			}
		}
	}
</script>

<style scoped lang="less">
	.from-view{
		padding: 0 60rpx;
		background-color: #FFFFFF;
	}
	
	.form-default{
		margin-top: 24rpx;
		padding: 40rpx 60rpx;
		background-color: #FFFFFF;
		color: #999999;
		font-size: 28rpx;
	}
	
	.form-list{
		padding: 40rpx 0;
		.from-info{
			flex: 1;
			.form-label{
				width: 160rpx;
				font-size: 28rpx;
				color: #999999;
				text-align: left;
			}
			.form-input{
				width: 80%;
				margin-left: 10rpx;
				color: #999999;
				font-size: 28rpx;
			}
		}
	}
	
	.save{
		color: #FFFFFF;
		width: 100%;
		height: 100rpx;
		font-size: 30rpx;
		font-weight: 500;
		background: linear-gradient(62deg, #1F2020 0%, #444444 100%);
	}
	
	.edit{
		width: 100%;
		height: 100rpx;
		font-size: 30rpx;
		font-weight: 550;
		.delete-address{
			width: 50%;
			background: #FFFFFF;
			color: #1F2020;
		}
		.save-address{
			width: 50%;
			color: #FFFFFF;
			background: linear-gradient(62deg, #1F2020 0%, #444444 100%);
		}
	}
	
	.shadow{
		box-shadow: 0 -2rpx 0 0 #E4E4E4;
	}
	
	.mar-top{
		margin-top: 24rpx;
	}
	
	.right-icon{
		width: 16rpx;
		height: 28rpx;
	}
</style>
