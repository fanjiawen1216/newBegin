<?php if ($this->_var['new_goods']): ?>
	<div class="madden-pro">
		<ul class="clearfix">
		<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_20179700_1542286504');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_20179700_1542286504']):
?>	
			<li>
				<a href="<?php echo $this->_var['goods_0_20179700_1542286504']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_20179700_1542286504']['name']); ?>" class="imgChange" target="_blank">
					<img src="<?php echo $this->_var['goods_0_20179700_1542286504']['thumb']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_20179700_1542286504']['name']); ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_20179700_1542286504']['name']); ?>">
				</a>
				<div class="inforBox">
					<p class="txtBt"><a href="<?php echo $this->_var['goods_0_20179700_1542286504']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_20179700_1542286504']['name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods_0_20179700_1542286504']['name']); ?></a></p>
					<div class="buy-btn ">
						<span class="tj"><?php if ($this->_var['goods_0_20179700_1542286504']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_20179700_1542286504']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_20179700_1542286504']['shop_price']; ?><?php endif; ?></span>
						<a target="_blank" href="<?php echo $this->_var['goods_0_20179700_1542286504']['url']; ?>"> 去看看</a>
					</div>
				</div>
			</li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
<?php endif; ?>